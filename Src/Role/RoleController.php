
<?php 
function addRole($name,$description,$rolecctive)
{
	$insert="INSERT INTO `Role`(`RoleName`, `RoleDetails`, `RoleActive`) VALUES ('$name','$description','0')";
}
function deleteRole($RoleId)
{
	$delete = "DELETE FROM Role WHERE RoleId=$RoleId";
	mysql_query($delete);
}
function updateRole($name,$description)
{
	$update = 
	"UPDATE Role 
	SET RoleName = '$name',RoleDetails='$description'
	WHERE RoleId='$RoleId'";
	mysql_query($update);
}
function searchRole($RoleId)
{
	$select = 
	"SELECT RoleId,RoleName,RoleDetails,RoleActive
	FROM Role
	WHERE RoleId='$RoleId'";
	return mysql_query($select);
}
?>