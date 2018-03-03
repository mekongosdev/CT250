<?php
//Insert
function addContact($name,$subject,$datewrite,$information,$email,$phone,$address1)
{
	$insert = 
	"INSERT INTO 
	`contact`(
	`Subject`, `Names`, 
	`ContactDate`, `Information`, `Email`, 
	`Phone`, `Address`)
	VALUES
	('$subject','$name','$datewrite',
	'$information','$email','$phone',
	'$address1')";
	mysql_query($insert);
}


function blindSubjectList()
{
	$sqlString="SELECT `SubjectId`, `SubjectName` FROM `subject`";
	$sqlresult = mysql_query($sqlString);
	echo "<select name='slSubject' class='form-control'><option value='0'>Vui lòng chọn chủ đề bạn muốn Contact</option>";

	while ($row = mysql_fetch_array($sqlresult,MYSQL_ASSOC)) {
		echo "<option value='".$row['SubjectId']."'>".$row['SubjectName']."</option>";

	}
	echo "</select>";

}
//UpdateContact
function searchContact($ContactId)
{
	$sqlSelect = "
	SELECT 
	`ContactId`, `Subject`, `Names`, 
	`ContactDate`, `Information`, `Email`, 
	`Phone`, `Address` 
	FROM `contact` 
	WHERE 'ContactId'=$ContactId";
}
function blindSubjecUpdatetList($selectValue)
{
	$sqlSelect = "SELECT `SubjectId`, `SubjectName` FROM `subject`";
	$result = mysql_query($sqlSelect);
	echo "<select> name='slSubject' class='form-control'><option value='0'>Vui lòng chọn chủ đề bạn muốn Contact</option>";
	while ($row=mysql_fetch_array($result,MYSQL_ASSOC)) 
	{
		if($row['SubjectId'] == $selectedValue)
		{
			echo "<option value='".$row['SubjectId']."' selected>".$row['SubjectName']."</option>";
		}
		else
		{
			echo "<option value='".$row['SubjectId']."'>".$row['SubjectName']."</option>";
		}
	# code...

	}
	echo "</select>";
}
function updateContact($contactid,$name,$subject,$datewrite,$information,$email,$phone,$address1)
{
	$sqlUpdate =
	"UPDATE contact
	SET
	Subject = '$subject',Names = '$name', ContactDate = '$datewrite',Information='$information',
	Email='$email',Phone='$phone',Address='$address1'
	WHERE 
	ContactId =$contactid ";
	mysql_query($sqlUpdate);
}
//Delete
function deleteContact($contactid)
{
	$sqlDelete = "DELETE FROM `contact` WHERE `ContactId`=$contactid";
	mysql_query($sqlDelete);
}

?>