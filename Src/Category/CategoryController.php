<?php 
function addCategory($name,$description)
{
	$insert = "INSERT INTO `Category`(`CategoryName`, `CategoryDescription`) VALUES ('$name','$description')";
	mysql_query($insert);
}
function deleteCategory($CategoryId)
{
	$delete = "DELETE FROM Category WHERE CategoryId=$CategoryId";
	mysql_query($delete);
}
function updateCategory($CategoryId,$name,$description)
{
	$update = 
	"UPDATE Category 
	SET CategoryName = '$name',CategoryDescription='$description'
	WHERE CategoryId='$CategoryId'";
	mysql_query($update);
}
function searchCategory($CategoryId)
{
	$select = 
	"SELECT CategoryId,CategoryName,CategoryDescription
	FROM Category
	WHERE CategoryId='$CategoryId'";
	return mysql_query($select);
}
?>