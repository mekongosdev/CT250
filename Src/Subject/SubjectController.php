<?php 
function addSubject($name,$details)
{
	$insert = "INSERT INTO Subject(SubjectName)
	VALUES ('$name')";
	mysql_query($insert);
}
function deleteSubject($id)
{
	$delete = "DELETE FROM Subject WHERE SubjectId=$id";
	mysql_query($delete);
}
function updateSubject($id,$name)
{
	$update = 
	"UPDATE Subject 
	SET SubjectName = '$name'
	WHERE SubjectId='$id'";
	mysql_query($update);
}
function searchSubject($id)
{
	$select = 
	"SELECT SubjectId,SubjectName
	FROM Subject
	WHERE SubjectId='$id'";
	return mysql_query($select);
}
?>