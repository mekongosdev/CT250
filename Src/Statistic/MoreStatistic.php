<?php
// $sqlSelect = "SELECT `PaymentMethodId`, `PaymentMethodName`, `PaymentMethodDetails` FROM PaymentMethod";
// $list_PaymentMethod= mysql_query($sqlSelect);

?>
<h3 class="w3_inner_tittle two text-center">Thống kê (tiếp tục)</h3>
<a class="btn btn-primary" href="?page=statistic">Quay lại <i class="fa fa-backward"></i></a>
</br>
</br>
<center>
	<div class="statistic">
		<div id="chart_div" style="width: 800px; height: 500px;"></div>
		<div style="width: 1000px; height: 780px">
			<div id="piechart" style="width: 499px; height: 250px; float: left"></div>
			<div id="piechart2" style="width: 499px; height: 250px; float: left"></div>
			<div id="piechart3" style="width: 499px; height: 250px; float: left"></div>
			<div id="piechart4" style="width: 499px; height: 250px; float: left"></div>
			<div id="piechart5" style="width: 499px; height: 250px; float: left; margin: 0 248px 0 248px"></div>
		</div>
	</div>
</center>
<!-- Nhúng thư viện Google Chart -->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<!-- Biểu đồ cột và tròn -->
<!-- Biểu đồ cột và tròn -->
<script type="text/javascript">
// Biểu đồ cột
google.charts.load('current', {'packages':['bar']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
    var data = google.visualization.arrayToDataTable([
      ['Rượu', 'Số lượng', 'Doanh thu', 'Lợi nhuận'],
			<?php
			$sql_statistic_orderwinedetail = "SELECT * FROM `orderwinedetails` INNER JOIN `wine` ON orderwinedetails.WineOrderId = wine.WineId";
		  $result_statistic_orderwinedetail = mysql_query($sql_statistic_orderwinedetail);
		  while ($row = mysql_fetch_array($result_statistic_orderwinedetail)) {
		  	echo "['";
				echo $row['WineName'];
				echo "',";
				echo $row['WineOrderQuantity'];
				echo ",";
				echo $row['WineSoldPrice'];
				echo ",";
				$kq = $row['WineSoldPrice'] - $row['WineOriginalPrice'];
				echo $kq;
				echo "],";
		  }
			?>
    ]);

    var options = {
      chart: {
        title: 'Doanh số bán ra',
        subtitle: 'Số lượng, doanh thu và lợi nhuận',
      }
    };

    var chart_div = new google.charts.Bar(document.getElementById('chart_div'));

    chart_div.draw(data, google.charts.Bar.convertOptions(options));
  }
</script>
<script type="text/javascript">
// Biểu đồ tròn
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {

	var data1 = google.visualization.arrayToDataTable([
		['Loại rượu', 'Thị phần trên tổng bán ra'],
		<?php
		$sql_statistic_category_vietnam = "SELECT * FROM `wine` INNER JOIN `category` ON wine.CategoryId = category.CategoryId WHERE category.CategoryName = 'Vietnam'";
		$result_statistic_category_vietnam = mysql_query($sql_statistic_category_vietnam);
		while ($row = mysql_fetch_array($result_statistic_category_vietnam)) {
			echo "['";
			echo $row['WineName'];
			echo "',";
			$kq = (($row['WineQuantity'] + $row['WineSold']) - $row['WineSold']);
			echo $kq;
			echo "],";
		}
		?>
	]);
	var data2 = google.visualization.arrayToDataTable([
		['Loại rượu', 'Thị phần trên tổng bán ra'],
		<?php
		$sql_statistic_category_fruit = "SELECT * FROM `wine` INNER JOIN `category` ON wine.CategoryId = category.CategoryId WHERE category.CategoryName = 'Fruit'";
		$result_statistic_category_fruit = mysql_query($sql_statistic_category_fruit);
		while ($row = mysql_fetch_array($result_statistic_category_fruit)) {
			echo "['";
			echo $row['WineName'];
			echo "',";
			$kq = (($row['WineQuantity'] + $row['WineSold']) - $row['WineSold']);
			echo $kq;
			echo "],";
		}
		?>
	]);

	var data3 = google.visualization.arrayToDataTable([
		['Loại rượu', 'Thị phần trên tổng bán ra'],
		<?php
		$sql_statistic_category_fruit = "SELECT * FROM `wine` INNER JOIN `category` ON wine.CategoryId = category.CategoryId WHERE category.CategoryName = 'Chivas'";
		$result_statistic_category_fruit = mysql_query($sql_statistic_category_fruit);
		while ($row = mysql_fetch_array($result_statistic_category_fruit)) {
			echo "['";
			echo $row['WineName'];
			echo "',";
			$kq = (($row['WineQuantity'] + $row['WineSold']) - $row['WineSold']);
			echo $kq;
			echo "],";
		}
		?>
	]);

	var data4 = google.visualization.arrayToDataTable([
		['Loại rượu', 'Thị phần trên tổng bán ra'],
		<?php
		$sql_statistic_category_fruit = "SELECT * FROM `wine` INNER JOIN `category` ON wine.CategoryId = category.CategoryId WHERE category.CategoryName = 'Vodka'";
		$result_statistic_category_fruit = mysql_query($sql_statistic_category_fruit);
		while ($row = mysql_fetch_array($result_statistic_category_fruit)) {
			echo "['";
			echo $row['WineName'];
			echo "',";
			$kq = (($row['WineQuantity'] + $row['WineSold']) - $row['WineSold']);
			echo $kq;
			echo "],";
		}
		?>
	]);

	var data5 = google.visualization.arrayToDataTable([
		['Loại rượu', 'Thị phần trên tổng bán ra'],
		<?php
		$sql_statistic_category_fruit = "SELECT * FROM `wine` INNER JOIN `category` ON wine.CategoryId = category.CategoryId WHERE category.CategoryName = 'Whisky'";
		$result_statistic_category_fruit = mysql_query($sql_statistic_category_fruit);
		while ($row = mysql_fetch_array($result_statistic_category_fruit)) {
			echo "['";
			echo $row['WineName'];
			echo "',";
			$kq = (($row['WineQuantity'] + $row['WineSold']) - $row['WineSold']);
			echo $kq;
			echo "],";
		}
		?>
	]);

	var options1 = {
		title: 'Tổng sản phẩm bán ra và thị phần của loại Vietnam'
	};

	var options2 = {
		title: 'Tổng sản phẩm bán ra và thị phần của loại Fruit'
	};

	var options3 = {
		title: 'Tổng sản phẩm bán ra và thị phần của loại Chivas'
	};

	var options4 = {
		title: 'Tổng sản phẩm bán ra và thị phần của loại Vodka'
	};

	var options5 = {
		title: 'Tổng sản phẩm bán ra và thị phần của loại Whisky'
	};

	var chart = new google.visualization.PieChart(document.getElementById('piechart'));
	var chart2 = new google.visualization.PieChart(document.getElementById('piechart2'));
	var chart3 = new google.visualization.PieChart(document.getElementById('piechart3'));
	var chart4 = new google.visualization.PieChart(document.getElementById('piechart4'));
	var chart5 = new google.visualization.PieChart(document.getElementById('piechart5'));

	chart.draw(data1, options1);
	chart2.draw(data2, options2);
	chart3.draw(data3, options3);
	chart4.draw(data4, options4);
	chart5.draw(data5, options5);
}
</script>
