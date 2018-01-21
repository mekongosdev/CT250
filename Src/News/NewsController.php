<?php 
function addNew($Newsname,$title,$content,$employeecode)

{
	$insert = "INSERT INTO 
				`news`(`NewsNames`, `Title`, `NewsContent`, `EmployeeCode`) 
				VALUES ('$Newsname','$title','$content','$employeecode')";
	mysql_query($insert);
}

//Update News
function searchNews($NewsId)

{
	$sqlSelect = "
	SELECT `NewsId`, `NewsNames`, `Title`, `NewsContent`, `EmployeeCode` 
	FROM `news` 
	WHERE NewsId='$NewsId'";
	return mysql_query($sqlSelect);
}

function UpdateNews($NewsId,$NewsName,$title,$content,$employeecode)
{
	$sqlUpdate = "UPDATE `news` SET 
	NewsNames = '$NewsName',
	Title = '$title',
	NewsContent = '$content',
	EmployeeCode = '$employeecode'
	WHERE	NewsId = '$NewsId'";
	mysql_query($sqlUpdate);
}
function DeleteNews($NewsId)
{
	$delete = "DELETE FROM news WHERE NewsId='$NewsId' ";
	mysql_query($delete);
}
?>