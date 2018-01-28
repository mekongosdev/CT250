<?php 
function addTime($applicationTime)
{
	$insertTime="INSERT INTO `time`(`ApplicationTime`) VALUES('appicationTime')";
	mysql_query($insertTime);
}
function deleteTime($timeId)
{
	$delete = "DELETE FROM `time` WHERE TimeId=$timeId";
	mysql_query($delete);
}
function updateTime($timeId,$applicationTime)
{
	$update = 
	"UPDATE 'time' 
	SET ApplicationTime = '$applicationTime'
	WHERE TimeId='$timeId'";
	mysql_query($update);
}
function searchTimeeasy($timeId)
{
	$select = 
	"SELECT TimeId,ApplicationTime
	FROM `time`
	WHERE TimeId='$timeId'";
	return mysql_query($select);
}
?>