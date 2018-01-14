
<?php 
function addPromotion($name,$description,$Promotioncctive)
{
	$insert="INSERT INTO `Promotion`(`PromotionName`, `PromotionDetails`, `PromotionActive`) VALUES ('$name','$description','$Promotioncctive')";
	mysql_query($insert);
}
function deletePromotion($PromotionId)
{
	$delete = "DELETE FROM Promotion WHERE PromotionId=$PromotionId";
	mysql_query($delete);
}
function updatePromotion($PromotionId, $name,$description,$Promotioncctive)
{
	$update = 
	"UPDATE Promotion 
	SET PromotionName = '$name',PromotionDetails='$description',PromotionActive='$Promotioncctive'
	WHERE PromotionId='$PromotionId'";
	mysql_query($update);
}
function searchPromotion($PromotionId)
{
	$select = 
	"SELECT PromotionId,PromotionName,PromotionDetails,PromotionActive
	FROM Promotion
	WHERE PromotionId='$PromotionId'";
	return mysql_query($select);
}
?>