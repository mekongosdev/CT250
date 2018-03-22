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
				//.' '.$row['WineOrderQuantity'].' '.$row['WineSoldPrice'].' '.$row['WineOriginalPrice'];
				// ['2014', 1000, 400],
	      // ['2015', 1170, 460],
	      // ['2016', 660, 1120],
	      // ['2017', 1030, 540]
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
<script>
// Biểu đồ tròn
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {

	var data = google.visualization.arrayToDataTable([
		['Task', 'Hours per Day'],
		['Work',     11],
		['Eat',      2],
		['Commute',  2],
		['Watch TV', 2],
		['Sleep',    7]
	]);

	var options = {
		title: 'My Daily Activities'
	};

	var chart = new google.visualization.PieChart(document.getElementById('piechart'));
	var chart2 = new google.visualization.PieChart(document.getElementById('piechart2'));
	var chart3 = new google.visualization.PieChart(document.getElementById('piechart3'));
	var chart4 = new google.visualization.PieChart(document.getElementById('piechart4'));
	var chart5 = new google.visualization.PieChart(document.getElementById('piechart5'));

	chart.draw(data, options);
	chart2.draw(data, options);
	chart3.draw(data, options);
	chart4.draw(data, options);
	chart5.draw(data, options);
}
</script>
