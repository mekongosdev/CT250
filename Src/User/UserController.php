<?php
function addUser($username, $password,$fullname,$sex,$address,$phone,$email,$dayofbirth,$identitycard)
{
	$insert = "INSERT INTO 
	`User`(`Username`, `Password`, `FullName`, `Sex`, `Address`, `Phone`, `Email`, `DateOfBirth`, `IC`, `Active`, `Status`, `Role`) 
	VALUES ('$username', '".md5($password)."', '$fullname', '$sex','$address', '$phone', '$email', '$dayofbirth', '$identitycard', 1, 1,1)";
	mysql_query($insert);
}
?>