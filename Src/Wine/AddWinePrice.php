	<?php 
	$WineId ="";
	$TimeId = "";
	$PurchasePrice ="";
	$SellingPrice = "";
	$Note = "";
	if(isset($_POST["btnAdd"]))
	{
		$WineId =$_POST["slWine"];
		$TimeId = $_POST["slTime"];
		$PurchasePrice =$_POST["txtPurchasePrice"];
		$SellingPrice = $_POST["txtSellingPrice"];
		$Note = $_POST["txtNote"];
		$result = addWinePrice($WineId,$TimeId,$PurchasePrice,$SellingPrice,$Note);
		if($result){
			echo '<script> alert("Thêm giá tượu thành công");</script>';
			echo "<script>window.location.href='?page=PriceHistory&WineId=".$_POST["slWine"]."'</script>";
		}else{
			echo '<script> alert("Thông tin đã tồn tại!");</script>';
			
		}
	}
	?>
	<div class="row">
		<div class="col-md-12"/>
		<form action="" method="post" accept-charset="utf-8" enctype="multipart/form-data" form-horizontal>
			<div class="form_group">
				<label class="control-label col-sm-12" for="email"><h2 align="center">Thêm giá rượu</h2></label>
			</div>

		</form>
		<form class="form-horizontal" accept-charset="utf-8" method="post" role="form" >
			<div class="form-group">
				<label class="control-label col-md-2" for="slWine">Tên Rượu:</label>
				<div class="col-sm-10">
					<?php
					$sqlSelect = "SELECT `WineId`, `WineName` FROM `Wine`";
					$result = mysql_query($sqlSelect);
					$selectedValue = "";
					echo "<select name='slWine' class='form-control'><option value='0'>Vui lòng chọn loại rượu</option>";
					while ($row=mysql_fetch_array($result,MYSQL_ASSOC)) 
					{
						if($row['WineId'] == $selectedValue)
						{
							echo "<option value='".$row['WineId']."' selected>".$row['WineName']."</option>";
						}
						else
						{
							echo "<option value='".$row['WineId']."'>".$row['WineName']."</option>";
						}

					}
					echo "</select>";
					?>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-2" for="slTime">Thời điểm</label>
				<div class="col-md-10">          
					<?php
					$sqlSelect = "SELECT `TimeId`, `ApplicationTime` FROM `Time`";
					$result = mysql_query($sqlSelect);
					$selectedValue = "";
					echo "<select name='slTime' class='form-control'><option value='0'>Vui lòng chọn thời điểm áp dụng</option>";
					while ($row=mysql_fetch_array($result,MYSQL_ASSOC)) 
					{
						if($row['TimeId'] == $selectedValue)
						{
							echo "<option value='".$row['TimeId']."' selected>".$row['ApplicationTime']."</option>";
						}
						else
						{
							echo "<option value='".$row['TimeId']."'>".$row['ApplicationTime']."</option>";
						}

					}
					echo "</select>";
					?>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-2" for="txtPurchasePrice">Giá mua:</label>
				<div class="col-md-10">          

					<input type="text" class="form-control" id="txtPurchasePrice" placeholder="Nhập vào giá mua vào" name="txtPurchasePrice"
					required  >
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-2" for="txtSellingPrice">Giá bán:</label>
				<div class="col-md-10">          
					<input name="txtSellingPrice" class="form-control" placeholder="Nhập vào giá bán ra" required id="txtSellingPrice"></input>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-2" for="txtNote">Ghi chú:</label>
				<div class="col-md-10">          
					<input type="text" class="form-control" id="txtNote" placeholder="Nhập vào ghi chú" name="txtNote"
					required  >
				</div>
			</div>

			<div class="form-group">        
				<div class="col-md-offset-2 col-md-10">
					<button type="submit" class="btn btn-info" name="btnAdd" onclick=""><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Thêm</button>
					<button type="reset" class="btn btn-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Bỏ Qua</button>
				</div>
			</div>
		</form>
	</div>