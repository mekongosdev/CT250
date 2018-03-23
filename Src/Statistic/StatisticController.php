<?php
// Tổng số lượng và thị phần
function statisticByCategory($categoryName) {
// Biểu đồ tròn
  echo "google.charts.load('current', {'packages':['corechart']});
  google.charts.setOnLoadCallback(drawChart);";

  echo "
  function drawChart() {

  	var data_".$categoryName." = google.visualization.arrayToDataTable([
  		['Loại rượu', 'Thị phần trên tổng bán ra'],";

  		$sql_statistic_category_vietnam = "SELECT * FROM `wine` INNER JOIN `category` ON wine.CategoryId = category.CategoryId WHERE category.CategoryName = '".$categoryName."'";
  		$result_statistic_category_vietnam = mysql_query($sql_statistic_category_vietnam);
  		while ($row = mysql_fetch_array($result_statistic_category_vietnam)) {
  			echo "['";
  			echo $row['WineName'];
  			echo "',";
  			$kq = (($row['WineQuantity'] + $row['WineSold']) - $row['WineSold']);
  			echo $kq;
  			echo "],";
  		}
    echo "
  	]);

  	var options_".$categoryName." = {
  		title: 'Tổng sản phẩm bán ra và thị phần của loại ".$categoryName."'
  	};

  	var chart_".$categoryName." = new google.visualization.PieChart(document.getElementById('piechart_".$categoryName."'));

  	chart_".$categoryName.".draw(data_".$categoryName.", options_".$categoryName.");
  }";
}
?>
