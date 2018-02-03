<?php 
function addWine($name,$strength,$shortdetails,$details,$wineupdate,$quantity,$idCat, $idPub,$idCountry)
{
	$insert = "INSERT INTO 
	`wine`(`WineName`, `WineStrength`,
	`WineShortDetails`, `WineDetails`, `WineUpdateDate`,
	`WineQuantity`, `CategoryId`, 
	`PublisherId`, `CountryId`)
	VALUES('$name','$strength','$shortdetails','$details','$wineupdate','$quantity','$idCat', '$idPub','$idCountry')";
	return mysql_query($insert);
}

function addWinePromotion($WineId, $PromotionId)
{
	$insert = "INSERT INTO 
	`promotion_wine`(`WineId`, `PromotionId`)
	VALUES('$WineId','$PromotionId')";
	return mysql_query($insert);
}

function addWinePrice($WineId,$TimeId,$PurchasePrice,$SellingPrice,$Note)
{
	$insert = "INSERT INTO `time_wine`(`WineId`, `TimeId`, `PurchasePrice`, `SellingPrice`, `Note`)
	VALUES('$WineId','$TimeId','$PurchasePrice','$SellingPrice','$Note')";
	return mysql_query($insert);
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
function searchWineTime($WineId, $TimeId)
{
	$sqlSelect = "
	SELECT `WineId`, `TimeId`, `PurchasePrice`, `SellingPrice`, `Note` FROM `time_wine`
	WHERE TimeId='$TimeId' and WineId ='$WineId'";
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

function updateWinePrice($WineId,$TimeId,$PurchasePrice,$SellingPrice,$Note)
{
	$sqlUpdate = "UPDATE time_wine SET 
	WineId = '$WineId',
	TimeId = '$TimeId',
	PurchasePrice = '$PurchasePrice',
	SellingPrice = '$SellingPrice',
	Note = '$Note',
	WHERE WineId = '$WineId'
	and TimeId ='$TimeId'";
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
function deleteImageWine($ImgWineId){
	$result= mysql_query("SELECT * FROM imgwine WHERE ImgWineId=$ImgWineId");
	$row = mysql_fetch_array($result, MYSQL_ASSOC);
	$fileDelete = $row['ImgWine'];
	unlink("../Public/admin/images/products/".$fileDelete);
	mysql_query("DELETE FROM `imgwine` WHERE ImgWineId=$ImgWineId");
}

function remove_vietnamese_accents($str)
{
$accents_arr=array(
"à","á","ạ","ả","ã","â","ầ","ấ","ậ","ẩ","ẫ","ă",
"ằ","ắ","ặ","ẳ","ẵ","è","é","ẹ","ẻ","ẽ","ê","ề",
"ế","ệ","ể","ễ",
"ì","í","ị","ỉ","ĩ",
"ò","ó","ọ","ỏ","õ","ô","ồ","ố","ộ","ổ","ỗ","ơ",
"ờ","ớ","ợ","ở","ỡ",
"ù","ú","ụ","ủ","ũ","ư","ừ","ứ","ự","ử","ữ",
"ỳ","ý","ỵ","ỷ","ỹ",
"đ",
"À","Á","Ạ","Ả","Ã","Â","Ầ","Ấ","Ậ","Ẩ","Ẫ","Ă",
"Ằ","Ắ","Ặ","Ẳ","Ẵ",
"È","É","Ẹ","Ẻ","Ẽ","Ê","Ề","Ế","Ệ","Ể","Ễ",
"Ì","Í","Ị","Ỉ","Ĩ",
"Ò","Ó","Ọ","Ỏ","Õ","Ô","Ồ","Ố","Ộ","Ổ","Ỗ","Ơ",
"Ờ","Ớ","Ợ","Ở","Ỡ",
"Ù","Ú","Ụ","Ủ","Ũ","Ư","Ừ","Ứ","Ự","Ử","Ữ",
"Ỳ","Ý","Ỵ","Ỷ","Ỹ",
"Đ"
);
$no_accents_arr=array(
"a","a","a","a","a","a","a","a","a","a","a",
"a","a","a","a","a","a",
"e","e","e","e","e","e","e","e","e","e","e",
"i","i","i","i","i",
"o","o","o","o","o","o","o","o","o","o","o","o",
"o","o","o","o","o",
"u","u","u","u","u","u","u","u","u","u","u",
"y","y","y","y","y",
"d",
"A","A","A","A","A","A","A","A","A","A","A","A",
"A","A","A","A","A",
"E","E","E","E","E","E","E","E","E","E","E",
"I","I","I","I","I",
"O","O","O","O","O","O","O","O","O","O","O","O",
"O","O","O","O","O",
"U","U","U","U","U","U","U","U","U","U","U",
"Y","Y","Y","Y","Y",
"D"
);
	return str_replace($accents_arr,$no_accents_arr,$str);
}
?>