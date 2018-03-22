<h3 class="w3_inner_tittle two text-center">Thống kê</h3>
<a class="btn btn-primary" href="?page=more_statistic">Xem thêm <i class="fa fa-plus"></i></a>
</br>
</br>
<center>
	<div class="statistic">
		<div id="chart_div_0" style="width: 800px; height: 500px;"></div>
		<div id="chart_div" style="width: 800px; height: 500px;"></div>
		<div style="width: 1000px; height: 360px">
				<div id="piechart" style="width: 499px; height: 350px; float: left"></div>
				<div id="piechart2" style="width: 499px; height: 350px; float: left"></div>
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

	chart.draw(data, options);
	chart2.draw(data, options);
}
</script>
<script type="text/javascript">
google.charts.load('current', {'packages':['corechart', 'bar']});
google.charts.setOnLoadCallback(drawStuff);

function drawStuff() {

var chartDiv = document.getElementById('chart_div_0');

var data = google.visualization.arrayToDataTable([
	['Galaxy', 'Distance', 'Brightness'],
	['Canis Major Dwarf', 8000, 23.3],
	['Sagittarius Dwarf', 24000, 4.5],
	['Ursa Major II Dwarf', 30000, 14.3],
	['Lg. Magellanic Cloud', 50000, 0.9],
	['Bootes I', 60000, 13.1]
]);

var materialOptions = {
	width: 900,
	chart: {
		title: 'Nearby galaxies',
		subtitle: 'distance on the left, brightness on the right'
	},
	series: {
		0: { axis: 'distance' }, // Bind series 0 to an axis named 'distance'.
		1: { axis: 'brightness' } // Bind series 1 to an axis named 'brightness'.
	},
	axes: {
		y: {
			distance: {label: 'parsecs'}, // Left y-axis.
			brightness: {side: 'right', label: 'apparent magnitude'} // Right y-axis.
		}
	}
};

function drawMaterialChart() {
	var materialChart = new google.charts.Bar(chartDiv);
	materialChart.draw(data, google.charts.Bar.convertOptions(materialOptions));
}

drawMaterialChart();
};
</script>
