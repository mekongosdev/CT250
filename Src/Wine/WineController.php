<?php 
function addWine($name,$strength,$wineupdate,$quantity,$idCat, $idPub,$idCountry)
{
	$insert = "INSERT INTO 
	`wine`(`WineName`, `WineStrength`,
	`WineShortDetails`, `WineDetails`, `WineUpdateDate`,
	`WineQuantity`, `CategoryId`, 
	`PublisherId`, `CountryId`)
	VALUES('$name','$strength','$shortdetails','$details','$wineupdate','$quantity','$idCat', '$idPub','$idCountry')";
	mysql_query($insert);
}
function blindListCountry()
{
	$sqlString="SELECT `CountryId`, `CountryName`, `CountryDetails` FROM `country`";
	$sqlresult = mysql_query($sqlString);
	echo "<select name='slCountry' class='form-control'><option value='0'>Vui lòng chọn quốc gia </option>";
	while ($row = mysql_fetch_array($sqlresult,MYSQL_ASSOC)) {
		echo "<option value='".$row['CountryId']."'>".$row['CountryName']."</option>";
	}
	echo "</select>";
}
function blindListCategory()
{
	$sqlString="SELECT `CategoryId`, `CategoryName`, `CategoryDescription` FROM `category`";
	$sqlresult = mysql_query($sqlString);
	echo "<select name='slCategory' class='form-control'><option value='0'>Vui lòng chọn loại rượu </option>";
	while ($row = mysql_fetch_array($sqlresult,MYSQL_ASSOC)) {
		echo "<option value='".$row['CategoryId']."'>".$row['CategoryName']."</option>";
	}
	echo "</select>";
}
function blindListPublisher()
{
	$sqlString="SELECT `PublisherId`, `PublisherName`, `PublisherDescription` FROM `publisher`";
	$sqlresult = mysql_query($sqlString);
	echo "<select name='slPublisher' class='form-control'><option value='0'>Vui lòng chọn nhà sản xuất rượu </option>";
	while ($row = mysql_fetch_array($sqlresult,MYSQL_ASSOC)) {
		echo "<option value='".$row['PublisherId']."'>".$row['PublisherName']."</option>";
	}
	echo "</select>";
}
function searchWine($WineId)
{
	$sqlSelect = "
	SELECT 
	`WineId`, `WineName`, `WineStrength`, `WineShortDetails`, `WineDetails`, 
	`WineUpdateDate`, `WineQuantity`, `CategoryId`, 
	`PublisherId`, `CountryId` 
	FROM `wine` 
	WHERE WineId='$WineId'";
	return mysql_query($sqlSelect);
}
function searchTime($TimeId)
{
	$sqlSelect = "
	SELECT 
	`TimeId`, `ApplicationTime`
	FROM `time` 
	WHERE TimeId='$TimeId'";
	return mysql_query($sqlSelect);
}

function updateWine($WineId,$name,$strength,$shortdetails,$details,$wineupdate,$quantity,$idCat, $idPub,$idCountry)
{
	$sqlUpdate = "UPDATE wine SET 
	WineName = '$name',
	WineStrength = '$strength',
	WineShortDetails = '$shortdetails',
	WineDetails = '$details',
	WineUpdateDate = '$wineupdate',
	WineQuantity = '$quantity',
	CategoryId = '$idCat',
	PublisherId = '$idPub',
	CountryId = '$idCountry'
	WHERE WineId = '$WineId'";
	mysql_query($sqlUpdate);
}
// Delete
function deleteWine($WineId)
{
	$sqldelete = "DELETE FROM `wine` WHERE WineId='$WineId'";
	mysql_query($sqldelete);
}

function DeleteWinePrice($WineId, $TimeId)
{
	$sqldelete = "DELETE FROM `time_wine` WHERE WineId='$WineId' and TimeId = '$TimeId'";
	mysql_query($sqldelete);
}
?>