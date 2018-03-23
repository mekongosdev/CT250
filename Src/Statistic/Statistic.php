<h3 class="w3_inner_tittle two text-center">Thống kê</h3>
<a class="btn btn-primary" href="?page=more_statistic">Xem thêm <i class="fa fa-plus"></i></a>
</br>
</br>
<center>
	<div class="statistic">
		<div id="chart_div" style="width: 800px; height: 500px;"></div>
		<div style="width: 1000px; height: 360px">
				<div id="piechart_Vietnam" style="width: 499px; height: 350px; float: left"></div>
				<div id="piechart_Fruit" style="width: 499px; height: 350px; float: left"></div>
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


<script type="text/javascript">
	<?php
	statisticByCategory("Vietnam");
	?>
</script>

<script type="text/javascript">
	<?php
	statisticByCategory("Fruit");
	?>
</script>
