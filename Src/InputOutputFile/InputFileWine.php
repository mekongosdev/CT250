<?php
//  Include thư viện PHPExcel_IOFactory vào
include 'Classes/PHPExcel/IOFactory.php';
require_once 'connect.php';

if(isset($_POST['btnGui'])){
	$inputFileName = $_FILES['file']['tmp_name'];

	//  Tiến hành đọc file excel
	try {
	    $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
	    $objReader = PHPExcel_IOFactory::createReader($inputFileType);
	    $objPHPExcel = $objReader->load($inputFileName);
	} catch(Exception $e) {
	    die('Lỗi không thể đọc file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
	}

	//  Lấy thông tin cơ bản của file excel

	// Lấy sheet hiện tại
	$sheet = $objPHPExcel->getSheet(0);

	// Lấy tổng số dòng của file, trong trường hợp này là 6 dòng
	$highestRow = $sheet->getHighestRow();

	// Lấy tổng số cột của file, trong trường hợp này là 4 dòng
	$highestColumn = $sheet->getHighestColumn();

	// Khai báo mảng $rowData chứa dữ liệu

	//  Thực hiện việc lặp qua từng dòng của file, để lấy thông tin
	for ($row = 2; $row <= $highestRow; $row++){
	    // Lấy dữ liệu từng dòng và đưa vào mảng $rowData
	    $rowData[] = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row, NULL, TRUE,FALSE);
	}

	for ($i = 0; $i < $highestRow - 1; $i++) {
			$product_name = $rowData[$i][0][1];
			$quantity = $rowData[$i][0][2];
			$price = $rowData[$i][0][3];
			$sql = "INSERT INTO diem(product_name,quantity,price) VALUES ('$product_name',$quantity,$price)";

			mysqli_query($conn, $sql);
		}
	echo "New record created successfully";
	mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Import data to database</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form method="POST" enctype="multipart/form-data">
		<input type="file" name="file">
		<button type="submit" name="btnGui">Import</button>
	</form>
</body>
</html>
