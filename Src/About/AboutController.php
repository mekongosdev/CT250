<?php
function deleteImageAbout($id){
	$ImgaboutId = $_GET["ImgaboutId"];
	$result= mysql_query("SELECT * FROM imgabout WHERE ImgaboutId=$ImgaboutId");
	$row = mysql_fetch_array($result, MYSQL_ASSOC);
	$fileDelete = $row['ImgaboutId'];
	$AboutId = $row['AboutId'];
	unlink("../../public/admin/images_about/".$fileDelete);
	mysql_query("DELETE FROM `imgabout` WHERE ImgaboutId=$ImgaboutId");
}
?>