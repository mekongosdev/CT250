<?php 
function addCountry($name,$details)
{
	$insert = "INSERT INTO Country(CountryName,CountryDetails)
	VALUES ('$name','$details')";
	mysql_query($insert);
}
function deleteCountry($CountryId)
{
	$delete = "DELETE FROM Country WHERE CountryId=$CountryId";
	mysql_query($delete);
}
function updateCountry($CountryId,$name,$details)
{
	$update = 
	"UPDATE Country 
	SET CountryName = '$name',CountryDetails='$details'
	WHERE CountryId='$CountryId'";
	mysql_query($update);
}
function searchCountry($CountryId)
{
	$select = 
	"SELECT CountryId,CountryName,CountyDetails
	FROM Country
	WHERE CountryId='$CountryId'";
	return mysql_query($select);
}
?>