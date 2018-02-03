	<?php 
	if(isset($_POST["btnAdd"]))
	{
		$WineId = $_POST['slWine'];
		$PromotionId = $_POST['slPromotion'];
		$result = addWinePromotion($WineId, $PromotionId) or trigger_error(mysql_errno().$result);
		if($result){
			echo '<script> alert("Thêm dữ liệu thành công");</script>';
			echo "<script>window.location.href='?page=PromotionHistory'</script>";
		}else{
			echo '<script> alert("Dữ liệu đã tồn tại");</script>';
		}
	}
	?>

	<div class="row">
		<div class="col-md-12"/>
		<form class="form-horizontal" accept-charset="utf-8" method="post" role="form" >
			<div class="form-group">
				<label class="control-label col-md-2" for="txtWineName">Tên rượu:</label>
				<div class="col-sm-10">
					<?php 
					$sqlString="SELECT `WineId`, `WineName` FROM `wine`";
					$sqlresult = mysql_query($sqlString);
					echo "<select name='slWine' class='form-control'><option value='0'>Vui lòng chọn tên rượu</option>";

					while ($row = mysql_fetch_array($sqlresult,MYSQL_ASSOC)) {
						echo "<option value='".$row['WineId']."'>".$row['WineName']."</option>";

					}
					echo "</select>";
					?>
				</div>
			</div> 
			<div class="form-group">
				<label class="control-label col-md-2" for="txtPromotionName">Chương trình áp dụng:</label>
				<div class="col-sm-10">
					<?php 
					$sqlString="SELECT `PromotionId`, `PromotionName` FROM `promotion`";
					$sqlresult = mysql_query($sqlString);
					echo "<select name='slPromotion' class='form-control'><option value='0'>Vui lòng chọn chương trình khuyến mãi áp dụng</option>";

					while ($row = mysql_fetch_array($sqlresult,MYSQL_ASSOC)) {
						echo "<option value='".$row['PromotionId']."'>".$row['PromotionName']."</option>";

					}
					echo "</select>";
					?>
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