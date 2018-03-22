<?php
$sqlSelect = "SELECT `PaymentMethodId`, `PaymentMethodName`, `PaymentMethodDetails` FROM PaymentMethod";
$list_PaymentMethod= mysql_query($sqlSelect);
?>
