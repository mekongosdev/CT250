<script type="text/javascript">
	function deleteConfirm()
	{
		if(confirm("Bạn có chắc chắn muốn xóa!")){
			return true;
		}
		else{
			return false;
		}
	}
</script>
<?php 
if(isset($_GET["ma"]))
{
	$mavechungtoi = $_GET["ma"];
	mysql_query("DELETE FROM `about` WHERE AboutId=$mavechungtoi");
}
?>
<?php
if (isset($_POST['btnXoa'])&&isset($_POST['checkbox'])) 
{
	for ($i = 0; $i < count($_POST['checkbox']); $i++) 
	{
		$mavechungtoi1 = $_POST['checkbox'][$i];
		mysql_query("DELETE FROM `about` WHERE AboutId=$mavechungtoi1");
	}
}
?>
<div class="container">
<p>
			<a  class="btn btn-danger" href="?page=AddAbout">
				<i class="fa fa-arrows"></i>
			</a>

		</p>
<h4 class="text-center">VỀ CHÚNG TÔI</h4>
<form name="frmXoa" method="post">
<table id="myTable" class="table-striped table-hover table-responsive">
	<thead >
		<tr>
            <th><strong>Chọn</strong></th>
			<th><strong>STT</strong></th>
			<th><strong>Về Chúng Tôi</strong></th>
            <th><strong>Nội Dung</strong></th>
			<th><strong>Người lập</strong></th>	
            <th><strong>Phương Thức</strong></th>
		</tr>
	</thead>
    <tbody>
<?php

$result = mysql_query(
"SELECT `AboutId`,`AboutName`, `AboutWinsor`, `EmployeeName` 
FROM `about` a
JOIN employee em ON a.EmployeeCode = em.EmployeeCode
LIMIT 0,25");
; 
$num = 1;
while($row = mysql_fetch_array($result))
{
?>
<tr>
            <td class="col-md-1"><input name="checkbox[]" type="checkbox" id="checkbox[]" value="<?php echo $row["AboutId"] ?>"></td>
            <td class="col-md-1"><?php echo $num ?></td>
            <td class="col-md-3"><?php echo $row["AboutName"] ?></td>
            <td class="col-md-3"><?php echo $row["AboutWinsor"] ?></td>
            <td class="col-md-1"><?php echo $row["EmployeeName"] ?></td>
            
            <td class="col-md-3">
            <a class="btn btn-primary" href="#"><i class="fa fa-file-image-o"></i></a>
            <a class="btn btn-danger" href="?page=about&ma=<?php echo $row['AboutId']; ?>" onclick="return deleteConfirm()">
								<i class="fa fa-remove"></i></a>
            <a class="btn btn-success" href="#"><i class="fa fa-edit"></i></a>
            </td>
</tr>
 <?php
$num++;
				}
				?>
	</tbody>
</table>
<div class="row" style="background-color:#FFF"><!--Nút chức nang-->
				<div class="col-md-12">
					<input type="submit" value="Xóa nhiều" name="btnXoa" id="btnXoa" onclick='return deleteConfirm()' class="btn btn-info"/>

				</div>
			</div>
</form>
</div>