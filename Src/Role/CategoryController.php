<?php 
function addRole($name,$description)
{
	$insert = "INSERT INTO `Role`(`RoleName`, `RoleDescription`) VALUES ('$name','$description')";
	mysql_query($insert);
}
function deleteRole($RoleId)
{
	$delete = "DELETE FROM Role WHERE RoleId=$RoleId";
	mysql_query($delete);
}
function updateRole($RoleId,$name,$description)
{
	$update = 
	"UPDATE Role 
	SET RoleName = '$name',RoleDescription='$description'
	WHERE RoleId='$RoleId'";
	mysql_query($update);
}
function searchRole($RoleId)
{
	$select = 
	"SELECT RoleId,RoleName,RoleDescription
	FROM Role
	WHERE RoleId='$RoleId'";
	return mysql_query($select);
}
?>