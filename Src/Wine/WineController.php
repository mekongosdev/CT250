<?php 
//Insert Code
function addWine($name,$strength,$price,$shortdetails,$details,$wineupdate,$quantity,
	$idCat, $idPub,$idCountry)
{
	$insert = "INSERT INTO 
	`wine`(`WineName`, `WineStrength`, `WinePrice`,
	`WineShortDetails`, `WineDetails`, `WineUpdateDate`,
	`WineQuantity`, `CategoryId`, 
	`PublisherId`, `CountryId`)
	VALUES('$name','$strength','$price','$shortdetails','$details','$wineupdate','$quantity','$idCat', '$idPub','$idCountry')";
	echo $insert;
	// mysql_query($insert);
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
//Update Code
function searchWine($WineId)
{
	$sqlSelect = "
	SELECT 
	`WineId`, `WineName`, `WineStrength`,
	`WinePrice`, `WineShortDetails`, `WineDetails`, 
	`WineUpdateDate`, `WineQuantity`, `WineSold`, `CategoryId`, 
	`PublisherId`, `CountryId` 
	FROM `wine` 
	WHERE WineId='$WineId'";
	return mysql_query($sqlSelect);
}
function blindCountryUpdatetList($selectValue)
{
	$sqlSelect = "SELECT `CountryId`, `CountryName`, `CountryDetails` FROM `country`";
	$result = mysql_query($sqlSelect);
	echo "<select> name='slCountry' class='form-control'><option value='0'>Vui lòng chọn xuất xứ</option>";
	while ($row=mysql_fetch_array($result,MYSQL_ASSOC)) 
	{
		if($row['CountryId'] == $selectedValue)
		{
			echo "<option value='".$row['CountryId']."' selected>".$row['CountryName']."</option>";
		}
		else
		{
			echo "<option value='".$row['CountryId']."'>".$row['CountryName']."</option>";
		}

	}
	echo "</select>";
}
function blindCategoryUpdateList($selectedValue)
{
	$sqlSelect = "SELECT `CategoryId`, `CategoryName`, `CategoryDescription` FROM `category`";
	$result = mysql_query($sqlSelect);
	echo "<select> name='slCategory' class='form-control'><option value='0'>Vui lòng chọn loại rượu</option>";
	while ($row=mysql_fetch_array($result,MYSQL_ASSOC)) 
	{
		if($row['CategoryId'] == $selectedValue)
		{
			echo "<option value='".$row['CategoryId']."' selected>".$row['CategoryName']."</option>";
		}
		else
		{
			echo "<option value='".$row['CategoryId']."'>".$row['CategoryName']."</option>";
		}

	}
	echo "</select>";
}
function blindPublisherUpdateList($selectedValue)
{
	$sqlSelect = "SELECT `PublisherId`, `PublisherName`, `PublisherDescription` FROM `publisher`";
	$result = mysql_query($sqlSelect);
	echo "<select> name='slPublisher' class='form-control'><option value='0'>Vui lòng chọn nhà sản xuất</option>";
	while ($row=mysql_fetch_array($result,MYSQL_ASSOC)) 
	{
		if($row['PublisherId'] == $selectedValue)
		{
			echo "<option value='".$row['PublisherId']."' selected>".$row['PublisherName']."</option>";
		}
		else
		{
			echo "<option value='".$row['PublisherId']."'>".$row['PublisherName']."</option>";
		}

	}
	echo "</select>";
}

function updateWine($WineId,$name,$strength,$price,$shortdetails,$details,$wineupdate,$quantity,$idCat, $idPub,$idCountry)
{
	$sqlUpdate = "UPDATE wine SET 
	WineName = '$name',
	WineStrength = '$strength',
	WinePrice = '$price',
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
?>