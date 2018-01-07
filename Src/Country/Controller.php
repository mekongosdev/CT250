<?php 
function addCountry($name,$details)
{
	$insert = "INSERT INTO Country(CountryName,CountryDetails)
	VALUES ('$name','$details')";
	mysql_query($insert);
}
function deleteCountry($id)
{
	$delete = "DELETE FROM Country WHERE CountryId=$id";
	mysql_query($delete);
}
function updateCountry($id,$name,$details)
{
	$update = 
	"UPDATE Country 
	SET CountryName = '$name',CountryDetails='$details'
	WHERE CountryId='$id'";
	mysql_query($update);
}
function searchCountry($id)
{
	$select = 
	"SELECT CountryId,CountryName,CountyDetails
	FROM Country
	WHERE CountryId='$id'";
	return mysql_query($select);
}
?>