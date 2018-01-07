<?php 
function addPaymentMethod($name,$description)
{
	$insert = "INSERT INTO `PaymentMethod`(`PaymentMethodName`, `PaymentMethodDescription`) VALUES ('$name','$description')";
	mysql_query($insert);
}
function deletePaymentMethod($PaymentMethodId)
{
	$delete = "DELETE FROM PaymentMethod WHERE PaymentMethodId=$PaymentMethodId";
	mysql_query($delete);
}
function updatePaymentMethod($PaymentMethodId,$name,$description)
{
	$update = 
	"UPDATE PaymentMethod 
	SET PaymentMethodName = '$name',PaymentMethodDescription='$description'
	WHERE PaymentMethodId='$PaymentMethodId'";
	mysql_query($update);
}
function searchPaymentMethod($PaymentMethodId)
{
	$select = 
	"SELECT PaymentMethodId,PaymentMethodName,PaymentMethodDescription
	FROM PaymentMethod
	WHERE PaymentMethodId='$PaymentMethodId'";
	return mysql_query($select);
}
?>