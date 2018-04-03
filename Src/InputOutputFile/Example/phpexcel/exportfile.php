<?php
require_once 'connect/db_connect.php';
// Bước 1:
// Lấy dữ liệu từ database
$sql = "SELECT product_name, quantity, price FROM diem";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    $data = array();
    $stt = 1;
    while($row = $result->fetch_assoc()) {
        array_push(
          $data,
          array (
            $stt,
            $row["product_name"],
            $row["quantity"],
            $row["price"]
          )
        );
        $stt++;
    }
} else {
    echo "0 results";
}
$conn->close();
print_r($data);
// // Bước 2: Import thư viện phpexcel
// require 'Classes/PHPExcel.php';
//
// // Bước 3: Khởi tạo đối tượng mới và xử lý
// $PHPExcel = new PHPExcel();
//
// // Bước 4: Chọn sheet - sheet bắt đầu từ 0
// $PHPExcel->setActiveSheetIndex(0);
//
// // Bước 5: Tạo tiêu đề cho sheet hiện tại
// $PHPExcel->getActiveSheet()->setTitle('Product');
//
// // Bước 6: Tạo tiêu đề cho từng cell excel,
// // Các cell của từng row bắt đầu từ A1 B1 C1 ...
// $PHPExcel->getActiveSheet()->setCellValue('A1', 'STT');
// $PHPExcel->getActiveSheet()->setCellValue('B1', 'Product Name');
// $PHPExcel->getActiveSheet()->setCellValue('C1', 'Quantity');
// $PHPExcel->getActiveSheet()->setCellValue('D1', 'Price');
//
// // Bước 7: Lặp data và gán vào file
// // Vì row đầu tiên là tiêu đề rồi nên những row tiếp theo bắt đầu từ 2
// $rowNumber = 2;
// foreach ($data as $index => $item)
// {
//     // A1, A2, A3, ...
//     $PHPExcel->getActiveSheet()->setCellValue('A' . $rowNumber, $item[0]);
//
//     // B1, B2, B3, ...
//     $PHPExcel->getActiveSheet()->setCellValue('B' . $rowNumber, $item[1]);
//
//     // C1, C2, C3, ...
//     $PHPExcel->getActiveSheet()->setCellValue('C' . $rowNumber, $item[2]);
//
//     // D1, D2, D3, ...
//     $PHPExcel->getActiveSheet()->setCellValue('D' . $rowNumber, $item[3]);
//
//     // Tăng row lên để khỏi bị lưu đè
//     $rowNumber++;
// }
// 
// // Bước 8: Khởi tạo đối tượng Writer
// $objWriter = PHPExcel_IOFactory::createWriter($PHPExcel, 'Excel2007');
//
// // Bước 9: Trả file về cho client download
// date_default_timezone_set("Asia/Ho_Chi_Minh");
// $filename = "Export_file_".date("YmdHis").".xlsx";
// // echo $filename;
// header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
// header('Content-Disposition: attachment;filename="'.$filename.'"');
// header('Cache-Control: max-age=0');
// if (isset($objWriter)) {
//     $objWriter->save('php://output');
// }
?>
