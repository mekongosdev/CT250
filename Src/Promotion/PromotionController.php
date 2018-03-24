
<?php
function addPromotion($name,$discount,$content,$Promotionacctive,$Promotionclose,$Promotionopen)
{
	$insert="INSERT INTO `Promotion`(`PromotionName`, `PromotionDiscount`, `PromotionContent`, `PromotionActive`, `PromotionClose`, `PromotionOpen`) VALUES ('$name','$discount','$content','$Promotionacctive','$Promotionclose','$Promotionopen')";
	mysql_query($insert);
}
function deletePromotion($PromotionId)
{
	$delete = "DELETE FROM Promotion WHERE PromotionId=$PromotionId";
	mysql_query($delete);
}
function changeActive($PromotionId,$do)
{
	if ($do == "OK") {
		$Promotionopen = '1';
	} else if ($do == "Remove") {
		$Promotionopen = '0';
	}

	$update = "UPDATE Promotion	SET PromotionOpen='$Promotionopen' WHERE PromotionId='$PromotionId'";
	mysql_query($update);
}
function updatePromotion($PromotionId,$name,$discount,$content,$Promotionacctive,$Promotionclose,$Promotionopen)
{
	$update =
	"UPDATE Promotion
	SET PromotionName = '$name',PromotionDiscount='$discount',PromotionContent='$content',PromotionActive='$Promotionacctive',PromotionClose='$Promotionclose',PromotionOpen='$Promotionopen'
	WHERE PromotionId='$PromotionId'";
	mysql_query($update);
}
function searchPromotion($PromotionId)
{
	$select =
	"SELECT PromotionId,PromotionName,PromotionDiscount,PromotionContent,PromotionActive,PromotionClose,PromotionOpen
	FROM Promotion
	WHERE PromotionId='$PromotionId'";
	return mysql_query($select);
}
?>
