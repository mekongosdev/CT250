<?php 
function addPublisher($name,$description)
{
	$insert = "INSERT INTO `Publisher`(`PublisherName`, `PublisherDescription`) VALUES ('$name','$description')";
	mysql_query($insert);
}
function deletePublisher($PublisherId)
{
	$delete = "DELETE FROM Publisher WHERE PublisherId=$PublisherId";
	mysql_query($delete);
}
function updatePublisher($PublisherId,$name,$description)
{
	$update = 
	"UPDATE Publisher 
	SET PublisherName = '$name',PublisherDescription='$description'
	WHERE PublisherId='$PublisherId'";
	mysql_query($update);
}
function searchPublisher($PublisherId)
{
	$select = 
	"SELECT `PublisherId`, `PublisherName`, `PublisherDescription`
	FROM Publisher
	WHERE PublisherId='$PublisherId'";
	return mysql_query($select);
}
?>