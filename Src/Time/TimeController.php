<?php 
function addTime($ApplicationTime)
{
	$insertTime="INSERT INTO `time`(`ApplicationTime`) VALUES('appicationTime')";
	mysql_query($insertTime);
}
function deleteTime($TimeId)
{
	$delete = "DELETE FROM `time` WHERE `TimeId`='$TimeId'";
	mysql_query($delete);
}
function updateTime($TimeId,$applicationTime)
{
	$update = 
	"UPDATE `time`
	SET ApplicationTime = '$applicationTime'
	WHERE TimeId='$TimeId'";
	mysql_query($update);
}
function searchTimeeasy($TimeId)
{
	$select = 
	"SELECT TimeId,ApplicationTime
	FROM `time`
	WHERE TimeId='$TimeId'";
	return mysql_query($select);
}
?>