<?php
// Thống kê doanh thu theo đơn hàng
function statisticByCategory($categoryName) {
  $sql_statistic_category = "SELECT * FROM `wine` INNER JOIN `category` ON wine.CategoryId = category.CategoryId WHERE category.CategoryName = '.$categoryName.'";
  $result_statistic_orderwinedetail = mysql_query($sql_statistic_orderwinedetail);
  while ($row = mysql_fetch_array($result_statistic_orderwinedetail)) {
		echo "['";
		echo $row['WineName'];
		echo "',";
		$kq = (($row['WineQuantity'] + $row['WineSold']) - $row['WineSold']);
		echo $kq;
		echo "],";
	}
}
?>
