	<?php
	if (isset($_GET['WineId']))
	{
		$WineId = $_GET['WineId'];
		$sql = "SELECT `WineName` FROM `wine` WHERE `WineId` = '$WineId'";
		$rs = mysql_query($sql) or trigger_error(mysql_error().$sql);
		$row = mysql_fetch_array($rs);
		$WineName = $row[0];
	}   
	else 
	{
		echo '<meta http-equiv="refresh" content="0: URL=Wine.php"/>';
	}
	// Genarate file name
	function random_name() {
		$key = '';
		$keys = array_merge(range(0, 9), range('a', 'z'));
	// string length = 10
		for ($i = 0; $i < 10; $i++) {
			$key .= $keys[array_rand($keys)];
		}

		return $key;
	}

	if(isset($_POST['btnUpload']))
	{
		$empCode = $_POST['WineId'];
		$file = $_FILES['fileToUpload'];
		if (is_array(getimagesize($file['tmp_name'])))
		{
	  if ($file['size'] <= 5*1024*1024 ) // maximum file size 5MB
	  {
	  	list($width, $height) = getimagesize($file['tmp_name']);
	  	$ratio = $height / $width;
	  	if ($ratio < 1.5) {
	  		$nw = 200;
	  		$nh = ceil( $ratio * $nw );
	  		$dst = imagecreatetruecolor( $nw, $nh );
	          $ext = pathinfo($file['name'], PATHINFO_EXTENSION); // Get file extension
	          $file_name = $_GET['WineId']."_".random_name().".".$ext;
	          copy($file['tmp_name'], "../Public/admin/images/".$file_name);
	          unlink($file['tmp_name']);
	          $cmd = "INSERT INTO imgwine (ImgWine, WineId) values('$file_name', '$WineId')";

	          $rs = mysql_query($cmd);
	          if($rs)
	          {
	          	echo "<script>alert('Tải lên hình ảnh thành công!);</script>";
	          }
	          else 
	          {
	          	echo "<script>alert('Thao tác thất bại!');</script>";
	          	echo '<meta http-equiv="refresh" content="0;URL='.$WineId.'">';
	          }
	      }
	      else {
	      	echo "Please choose other image has lower ratio";
	      }
	  }
	  else
	  {
	  	echo "hình có kích thước quá lớn";
	  }

	}
	else
	{
		echo "Hình không đúng định dạng";
	} 
}

?>
<div class="container">
	<form  id="frmHinhAnh" class="form-horizontal" name="frmHinhAnh" method="post" action="" enctype="multipart/form-data" role="form">
		<div class="form-group">
			<label for="WineId" class="col-sm-2 control-label">Mã hình (*):  </label>
			<div class="col-sm-10">
				<input type="text" name="WineId" id="WineId" class="form-control" placeholder="Mã nhân hình" value='<?php echo $WineId; ?>' readonly="readonly"/>
			</div>
		</div>  
		<div class="form-group">    
			<label for="WineName" class="col-sm-2 control-label">Tên rượu (*):  </label>
			<div class="col-sm-10">
				<input type="text" name="WineName" id="WineName" class="form-control" placeholder="Tên loại sản phẩm" value='<?php echo $WineName; ?>' readonly="readonly"/> 
			</div>
		</div>    
		<div class="form-group">    
			<div class="col-sm-10 pull-right">
				<input type="file" accept=".jpg, .png, .jpeg, .gif" onChange='hasExistfile()' name="fileToUpload" id="fileToUpload" class="form-control-file" required="true" />
			</div>
		</div>  
		<button type="submit" class="btn btn-primary pull-right" name="btnUpload" disabled id="btnUploadImage">Tải ảnh</button>
		<script type="text/javascript">
			function hasExistfile(){
				document.getElementById('btnUploadImage').disabled = false;
			}
		</script>
		<?php
		$query = "SELECT `ImgWineId`, `ImgWine` FROM `imgwine` WHERE `WineId`='".$_GET['WineId']."'";
		//
		$result = mysql_query($query) or trigger_error(mysql_error().$query);
		$num = 1;
		while ($row = mysql_fetch_array($result, MYSQL_ASSOC)){  
			$ImgWineId = $row['ImgWineId'];
			?>
			<div class='col-sm-offset-2 col-sm-12'>
				<div class="row">

					<div class='col-sm-1'>
						<?php echo $num; ?>
					</div>
					<div class='col-sm-2'>
						<img src="<?php echo "../Public/admin/images/".$row['ImgWine']; ?>" width="100px"/>
					</div>
					<a class='btn btn-danger' href="?page=DeleteWineImage&ImgWineId=<?=$ImgWineId;?>" onclick="return confirm('Bạn có chắc chắn hình này không?')"><i class="fa fa-remove"></i></a>
				</div>
				<div class='col-sm-offset-2 col-sm-4'>
					<div><hr /></div>
				</div>
			</div>
			<?php
			$num++;
		}
		?>
	</form>
</div>
