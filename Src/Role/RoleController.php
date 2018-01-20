
<?php 
function addRole($name,$description,$rolecctive)
{
	$insert="INSERT INTO `Role`(`RoleName`, `RoleDetails`, `RoleActive`) VALUES ('$name','$description','$rolecctive')";
	mysql_query($insert);
}
function deleteRole($RoleId)
{
	$delete = "DELETE FROM Role WHERE RoleId=$RoleId";
	mysql_query($delete);
}
//Update

function updateRole($RoleId, $name,$description,$rolecctive)
{
	$update = 
	"UPDATE Role 
	SET RoleName = '$name',RoleDetails='$description',RoleActive='$rolecctive'
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