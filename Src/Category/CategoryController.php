<?php 
function addCategory($name,$description)
{
	$insert = "INSERT INTO `Category`(`CategoryName`, `CategoryDescription`) VALUES ('$name','$description')";
	mysql_query($insert);
}
function deleteCategory($id)
{
	$delete = "DELETE FROM Category WHERE CategoryId=$id";
	mysql_query($delete);
}
function updateCategory($id,$name,$description)
{
	$update = 
	"UPDATE Category 
	SET CategoryName = '$name',CategoryDescription='$description'
	WHERE CategoryDescription='$id'";
	mysql_query($update);
}
function searchCategory($id)
{
	$select = 
	"SELECT CategoryId,CategoryName,CategoryDescription
	FROM Category
	WHERE CategoryId='$id'";
	return mysql_query($select);
}
?>