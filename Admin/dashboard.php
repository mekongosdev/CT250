
<!DOCTYPE html>
<html lang="vi">
<head>
	<title>Windsor Shop</title>
	<!-- custom-theme -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="CT250" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>

<link href="../public/admin/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="../public/admin/css/table-style.css" />
<link rel="stylesheet" type="text/css" href="../public/admin/css/basictable.css" />
<link href="../public/admin/css/component.css" rel="stylesheet" type="text/css" media="all" />
<link href="../public/admin/css/component.css" rel="stylesheet" type="text/css" media="all" />
<link href="../public/admin/css/export.css" rel="stylesheet" type="text/css" media="all" />
<link href="../public/admin/css/flipclock.css" rel="stylesheet" type="text/css" media="all" />
<link href="../public/admin/css/circles.css" rel="stylesheet" type="text/css" media="all" />
<link href="../public/admin/css/style_grid.css" rel="stylesheet" type="text/css" media="all" />
<link href="../public/admin/css/style.css" rel="stylesheet" type="text/css" media="all" />





<!-- font-awesome-icons -->
<link href="../public/admin/css/font-awesome.css" rel="stylesheet">
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
</head>
<body>
	<?php
	include_once("../Library/connect.php");
	include_once("../Src/Category/CategoryController.php");
	include_once("../Src/Publisher/PublisherController.php");
	include_once("../Src/Country/CountryController.php");
	include_once("../Src/Role//RoleController.php");
	include_once("../Src/Subject/SubjectController.php");
	include_once("../Src/Contact/ContactController.php");
	include_once("../Src/PaymentMethod/PaymentMethodController.php");
	include_once("../Src/Employee/EmployeeController.php");
	include_once("../Src/Promotion/PromotionController.php");
	include_once("../Src/News/NewsController.php");
	?>
	<!-- banner -->
	<div class="wthree_agile_admin_info">
		<!-- /w3_agileits_top_nav-->
		<!-- /nav-->
		<div class="w3_agileits_top_nav">
			<ul id="gn-menu" class="gn-menu-main">
				<!-- /nav_agile_w3l -->
				<li class="gn-trigger">
					<a class="gn-icon gn-icon-menu"><i class="fa fa-bars" aria-hidden="true"></i><span>Danh mục</span></a>
					<nav class="gn-menu-wrapper">
						<div class="gn-scroller scrollbar1">
							<ul class="gn-menu agile_menu_drop">
								<li><a href="#"> <i class="fa fa-tachometer"></i> Bảng điều khiển</a></li>
								<li>
									<a href="?page=category"><i class="fa fa-cogs" aria-hidden="true"></i> Danh mục </a>
								</li>
								<li>
									<a href="?page=publisher"> <i class="fa fa-file-text-o" aria-hidden="true"></i>Publisher</a>
								</li>
								<li><a href="?page=country"> <i class="fa fa-table top" aria-hidden="true"></i> Country</a></li>
								<li><a href="#"><i class="fa fa-list" aria-hidden="true"></i>Quản lý sản phẩm<i class="fa fa-angle-down" aria-hidden="true"> </i></a>
									<ul class="gn-submenu">
										<li class="mini_list_agile"><a href="typo.html"><i class="fa fa-caret-right" aria-hidden="true"></i> Quản lỷ rượu</a></li>
										<li class="mini_list_w3"><a href="icons.html"> <i class="fa fa-caret-right" aria-hidden="true"></i> Quản lý nhà sản xuất</a></li>
										<li class="mini_list_agile"><a href="?page=paymentmethod"><i class="fa fa-caret-right" aria-hidden="true"></i> Quản lỷ HTTT</a></li>
										<li class="mini_list_w3"><a href="?page=promotion"> <i class="fa fa-caret-right" aria-hidden="true"></i> Quản lý khuyến mãi</a></li>
										<li class="mini_list_w3"><a href="?page=subject"> <i class="fa fa-caret-right" aria-hidden="true"></i> Quản lý chủ đề liên hệ</a></li>

									</ul>
								</li>

								<li class="page">
									<a href="#"><i class="fa fa-files-o" aria-hidden="true"></i> Quản lý nhân viên <i class="fa fa-angle-down" aria-hidden="true"></i></a>
									<ul class="gn-submenu">

										<li class="mini_list_agile"> <a href="signin.html"> <i class="fa fa-caret-right" aria-hidden="true"></i> Thông tin nhân viên</a></li>
										<li class="mini_list_w3"><a href="signup.html"> <i class="fa fa-caret-right" aria-hidden="true"></i> Tin tức</a></li>
										<li class="mini_list_agile error"><a href="404.html"> <i class="fa fa-caret-right" aria-hidden="true"></i> Chi nhánh </a></li>

										<li class="mini_list_w3_line"><a href="?page=role"> <i class="fa fa-caret-right" aria-hidden="true"></i> Quyền hạn</a></li>
									</ul>
								</li>
							</ul>
						</div><!-- /gn-scroller -->
					</nav>
				</li>
				<!-- //nav_agile_w3l -->
				<li class="second logo"><h1><a href="dashboard.php"><i class="fa fa-graduation-cap" aria-hidden="true"></i>Windsor </a></h1></li>
				<li class="second admin-pic">
					<ul class="top_dp_agile">
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<div class="profile_img">
									<span class="prfil-img"><img src="images/admin.jpg" alt=""> </span>
								</div>
							</a>
							<ul class="dropdown-menu drp-mnu">
								<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li>
								<li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li>
								<li> <a href="#"><i class="fa fa-sign-out"></i> Logout</a> </li>
							</ul>
						</li>

					</ul>
				</li>
				<li class="second top_bell_nav">
					<ul class="top_dp_agile ">
						<li class="dropdown head-dpdn">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true"><i class="fa fa-bell-o" aria-hidden="true"></i> <span class="badge blue">4</span></a>
							<ul class="dropdown-menu">
								<li>
									<div class="notification_header">
										<h3>Your Notifications</h3>
									</div>
								</li>
								<li><a href="#">
									<div class="user_img"><img src="images/a3.jpg" alt=""></div>
									<div class="notification_desc">
										<h6>John Smith</h6>
										<p>Lorem ipsum dolor</p>
										<p><span>1 hour ago</span></p>
									</div>
									<div class="clearfix"></div>
								</a></li>
								<li class="odd"><a href="#">
									<div class="user_img"><img src="images/a1.jpg" alt=""></div>
									<div class="notification_desc">
										<h6>Jasmin Leo</h6>
										<p>Lorem ipsum dolor</p>
										<p><span>3 hour ago</span></p>
									</div>
									<div class="clearfix"></div>
								</a></li>
								<li><a href="#">
									<div class="user_img"><img src="images/a2.jpg" alt=""></div>
									<div class="notification_desc">
										<h6>James Smith</h6>
										<p>Lorem ipsum dolor</p>
										<p><span>2 hour ago</span></p>
									</div>
									<div class="clearfix"></div>
								</a></li>
								<li><a href="#">
									<div class="user_img"><img src="images/a4.jpg" alt=""></div>
									<div class="notification_desc">
										<h6>James Smith</h6>
										<p>Lorem ipsum dolor</p>
										<p><span>1 hour ago</span></p>
									</div>
									<div class="clearfix"></div>
								</a></li>
								<li>
									<div class="notification_bottom">
										<a href="#">See all Notifications</a>
									</div>
								</li>
							</ul>
						</li>

					</ul>
				</li>
				<li class="second top_bell_nav">
					<ul class="top_dp_agile ">
						<li class="dropdown head-dpdn">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true"><i class="fa fa-envelope-o" aria-hidden="true"></i> <span class="badge blue">3</span></a>
							<ul class="dropdown-menu">
								<li>
									<div class="notification_header">
										<h3>Your Messages</h3>
									</div>
								</li>
								<li><a href="#">
									<div class="user_img"><img src="images/a3.jpg" alt=""></div>
									<div class="notification_desc">
										<h6>John Smith</h6>
										<p>Lorem ipsum dolor</p>
										<p><span>3 hour ago</span></p>
									</div>
									<div class="clearfix"></div>
								</a></li>
								<li class="odd"><a href="#">
									<div class="user_img"><img src="images/a1.jpg" alt=""></div>
									<div class="notification_desc">
										<h6>Jasmin Leo</h6>
										<p>Lorem ipsum dolor</p>
										<p><span>2 hour ago</span></p>
									</div>
									<div class="clearfix"></div>
								</a></li>
								<li><a href="#">
									<div class="user_img"><img src="images/a2.jpg" alt=""></div>
									<div class="notification_desc">
										<h6>James Smith</h6>
										<p>Lorem ipsum dolor</p>
										<p><span>1 hour ago</span></p>
									</div>
									<div class="clearfix"></div>
								</a></li>
								<li>
									<div class="notification_bottom">
										<a href="#">See all Messages</a>
									</div>
								</li>
							</ul>
						</li>

					</ul>
				</li>
				<li class="second top_bell_nav">
					<ul class="top_dp_agile ">
						<li class="dropdown head-dpdn">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i><span class="badge blue">9</span></a>
							<ul class="dropdown-menu">
								<li>
									<div class="notification_header">
										<h3>You have 4 Pending tasks</h3>
									</div>
								</li>
								<li><a href="#">
									<div class="task-info">
										<span class="task-desc">Database update</span><span class="percentage">40%</span>
										<div class="clearfix"></div>
									</div>
									<div class="progress progress-striped active">
										<div class="bar yellow" style="width:40%;"></div>
									</div>
								</a></li>
								<li><a href="#">
									<div class="task-info">
										<span class="task-desc">Dashboard done</span><span class="percentage">90%</span>
										<div class="clearfix"></div>
									</div>
									<div class="progress progress-striped active">
										<div class="bar green" style="width:90%;"></div>
									</div>
								</a></li>
								<li><a href="#">
									<div class="task-info">
										<span class="task-desc">Mobile App</span><span class="percentage">33%</span>
										<div class="clearfix"></div>
									</div>
									<div class="progress progress-striped active">
										<div class="bar red" style="width: 33%;"></div>
									</div>
								</a></li>
								<li><a href="#">
									<div class="task-info">
										<span class="task-desc">Issues fixed</span><span class="percentage">80%</span>
										<div class="clearfix"></div>
									</div>
									<div class="progress progress-striped active">
										<div class="bar  blue" style="width: 80%;"></div>
									</div>
								</a></li>
								<li>
									<div class="notification_bottom">
										<a href="#">See all pending tasks</a>
									</div>
								</li>
							</ul>
						</li>
					</ul>
				</li>

				<li class="second w3l_search">

					<form action="#" method="post">
						<input type="search" name="search" placeholder="Tìm kiếm..." required="">
						<button class="btn btn-default" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
					</form>

				</li>
				<li class="second full-screen">
					<section class="full-top">
						<button id="toggle"><i class="fa fa-arrows-alt" aria-hidden="true"></i></button>
					</section>
				</li>

			</ul>
			<!-- //nav -->

		</div>
		<div class="clearfix"></div>
		<!-- //w3_agileits_top_nav-->
		<!-- /inner_content-->
		<div class="inner_content">
			<!-- /inner_content_w3_agile_info-->
			<div class="inner_content_w3_agile_info">
				<!-- /agile_top_w3_grids-->
				<div class="agile_top_w3_grids">
					<ul class="ca-menu">
						<li>
							<a href="#">

								<i class="fa fa-hourglass-half" aria-hidden="true"></i>
								<div class="ca-content">
									<h4 class="ca-main">500</h4>
									<h3 class="ca-sub">Đơn hàng đang chờ xử lý</h3>
								</div>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="fa fa-gift" aria-hidden="true"></i>
								<div class="ca-content">
									<h4 class="ca-main one">26,808</h4>
									<h3 class="ca-sub one">Khuyến mãi chờ kích hoạt</h3>
								</div>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="fa fa-money" aria-hidden="true"></i>
								<div class="ca-content">
									<h4 class="ca-main two">29,008</h4>
									<h3 class="ca-sub two">Doanh thu trong tháng</h3>
								</div>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="fa fa-bar-chart-o" aria-hidden="true"></i>
								<div class="ca-content">
									<h4 class="ca-main three">49,436</h4>
									<h3 class="ca-sub three">Thống kê hàng tháng</h3>
								</div>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="fa fa-line-chart" aria-hidden="true"></i>
								<div class="ca-content">
									<h4 class="ca-main four">30,808</h4>
									<h3 class="ca-sub four">Báo cáo</h3>
								</div>
							</a>
						</li>
						<div class="clearfix"></div>
					</ul>
				</div>
				<!-- //agile_top_w3_grids-->

				<!-- //agile_top_w3_grids-->
				<div class="inner_content_w3_agile_info two_in">
					<!-- tables -->

					<div class="agile-tables">
						<div class="w3l-table-info agile_info_shadow">
							<?php
							//Category
							if(isset($_GET['page']) && $_GET['page'] == "category")
							{
								include("../Src/Category/Category.php");

							}
							if($_GET['page'] == "UpadateCategory"){
								include("../Src/Category/UpdateCategory.php");
							}
							elseif ($_GET['page'] == "AddCategory") {
								include("../Src/Category/AddCategory.php");

							}
							elseif(isset($_GET['CategoryId'])){
								deleteCategory($_GET['CategoryId']);
								echo "<script>window.location.href='?page=category'</script>";
							}
							//Publisher
							if(isset($_GET['page'])&& $_GET['page']=="publisher")
							{
								include_once("../Src/Publisher/Publisher.php");
							}
							if($_GET['page']=="UpdatePublisher")
							{
								include_once("../Src/Publisher/UpdatePublisher.php");
							}
							elseif ($_GET['page']=="AddPublisher") {
								# code...
								include('../Src/Publisher/AddPublisher.php');
							}
							elseif (isset($_GET['PublisherId'])) {
								deletePublisher($_GET['PublisherId']);
								# code...
								echo "<script>window.location.href='?page=publisher'</script>";
							}
							//Country
							if(isset($_GET['page']) && $_GET['page'] == "country")
							{
								include("../Src/Country/Country.php");

							}
							if($_GET['page'] == "UpdateCountry"){
								include("../Src/Country/UpdateCountry.php");
							}
							elseif ($_GET['page'] == "AddCountry") {
								include("../Src/Country/AddCountry.php");

							}
							elseif(isset($_GET['CountryId'])){
								deleteCountry($_GET['CountryId']);
								echo "<script>window.location.href='?page=country'</script>";
							}
							//Role
							if(isset($_GET['page'])&& $_GET['page']=="role")
							{
								include_once("../Src/Role/Role.php");
							}
							if($_GET['page']=="UpadateRole")
							{

								include_once("../Src/Role/UpdateRole.php");
							}
							elseif ($_GET['page']=="AddRole") {
								# code...
								include('../Src/Role/AddRole.php');
							}
							elseif(isset($_GET['RoleId'])){
								deleteRole($_GET['RoleId']);
								echo "<script>window.location.href='?page=role'</script>";
							}
							//Subject
							if(isset($_GET['page'])&& $_GET['page']=="subject")
							{
								include_once("../Src/Subject/Subject.php");
							}
							if($_GET['page']=="UpadateSubject")
							{

								include_once("../Src/Subject/UpdateSubject.php");
							}
							elseif ($_GET['page']=="AddSubject") {
								# code...
								include('../Src/Subject/AddSubject.php');
							}
							elseif(isset($_GET['SubjectId'])){
								deleteSubject($_GET['SubjectId']);
								echo "<script>window.location.href='?page=subject'</script>";
							}

							//Contact
							if(isset($_GET['page'])&& $_GET['page']=="contact")
							{
								include_once("../Src/Contact/Contact.php");
							}
							if(isset($_GET['ContactId'])){
								deleteContact($_GET['ContactId']);
								echo "<script>window.location.href='?page=contact'</script>";
							}
							//Payment Method
							if(isset($_GET['page'])&& $_GET['page']=="paymentmethod")
							{
								include_once("../Src/PaymentMethod/PaymentMethod.php");
							}
							if($_GET['page']=="UpadatePaymentMethod")
							{

								include_once("../Src/PaymentMethod/UpdatePaymentMethod.php");
							}
							elseif ($_GET['page']=="AddPaymentMethod") {
								include('../Src/PaymentMethod/AddPaymentMethod.php');
							}
							elseif(isset($_GET['PaymentMethodId'])){
								deletePaymentMethod($_GET['PaymentMethodId']);
								echo "<script>window.location.href='?page=paymentmethod'</script>";
							}


							//Employee
							if(isset($_GET['page'])&& $_GET['page']=="employee")
							{
								include_once("../Src/Employee/Employee.php");
							}
							if($_GET['page']=="UpadateEmployee")
							{
								include_once("../Src/Employee/UpdateEmployee.php");
							}
							elseif ($_GET['page']=="AddEmployee") {
								include('../Src/Employee/AddEmployee.php');
							}
							elseif(isset($_GET['empCode'])){
								deleteEmployee($_GET['empCode']);
								echo "<script>window.location.href='?page=employee'</script>";
							}
							//Promotion
							if(isset($_GET['page'])&& $_GET['page']=="promotion")
							{
								include_once("../Src/Promotion/Promotion.php");
							}
							if($_GET['page']=="UpdatePromotion")
							{

								include_once("../Src/Promotion/UpdatePromotion.php");
							}
							elseif ($_GET['page']=="AddPromotion") {
								include('../Src/Promotion/AddPromotion.php');
							}
							elseif($_GET['page']=="DeletePromotion"){
								deletePromotion($_GET['PromotionId']);
								echo "<script>window.location.href='?page=promotion'</script>";
							}
							elseif($_GET['page']=="ChangeActive"){
								changeActive($_GET['PromotionId'],$_GET['Do']);
								echo "<script>window.location.href='?page=promotion'</script>";
							}

							//News
							if(isset($_GET['page'])&& $_GET['page']=="news")
							{
								include_once("../Src/News/News.php");
							}
							if($_GET['page']=="UpadateNews")
							{

								include_once("../Src/News/UpdateNews.php");
							}
							elseif ($_GET['page']=="AddNews") {
								include('../Src/News/AddNews.php');
							}
							elseif($_GET['page']=="DeleteNews"){
								deleteNews($_GET['NewsId']);
								echo "<script>window.location.href='?page=news'</script>";
							}
							elseif($_GET['page']=="ChangeActive"){
								changeActive($_GET['PromotionId'],$_GET['Do']);
								echo "<script>window.location.href='?page=promotion'</script>";
							}

							//User
							if(isset($_GET['page'])&& $_GET['page']=="user")
							{
								include_once("../Src/User/User.php");
							}
							if($_GET['page']=="DeleteUser"){
								deletePromotion($_GET['UserId']);
								echo "<script>window.location.href='?page=user'</script>";
							}

							if(isset($_GET['page'])&& $_GET['page']=="ActiveUser"){

								if($_GET['Status'] == 0){
									$status = 1;
								}
								else{
									$status = 0;
								}
								$updateStatus = "UPDATE `user` SET `Status`=".$status." where `UserName` = '".$_GET['UserId']."'";
								mysql_query($updateStatus);
								echo "<script>window.location.href='?page=user'</script>";
							}
							?>
						</div>
					</div>



				</div>
				<!-- //inner_content_w3_agile_info-->
			</div>
			<!-- //inner_content-->
		</div>
		<!-- banner -->
		<!--copy rights start here-->
		<div class="copyrights">
			<p>© 2018 CT250 - Nhóm 02. All Rights Reserved</p>
		</div>
		<!--copy rights end here-->
		<!-- js -->

		<script type="text/javascript" src="../public/admin/js/jquery-2.1.4.min.js"></script>

		<!-- /amcharts -->
		<script src="../public/admin/js/amcharts.js"></script>
		<script src="../public/admin/js/serial.js"></script>
		<script src="../public/admin/js/export.js"></script>
		<script src="../public/admin/js/light.js"></script>
		<!-- Chart code -->
		<script>
			var chart = AmCharts.makeChart("chartdiv", {
				"theme": "light",
				"type": "serial",
				"startDuration": 2,
				"dataProvider": [{
					"country": "USA",
					"visits": 4025,
					"color": "#FF0F00"
				}, {
					"country": "China",
					"visits": 1882,
					"color": "#FF6600"
				}, {
					"country": "Japan",
					"visits": 1809,
					"color": "#FF9E01"
				}, {
					"country": "Germany",
					"visits": 1322,
					"color": "#FCD202"
				}, {
					"country": "UK",
					"visits": 1122,
					"color": "#F8FF01"
				}, {
					"country": "France",
					"visits": 1114,
					"color": "#B0DE09"
				}, {
					"country": "India",
					"visits": 984,
					"color": "#04D215"
				}, {
					"country": "Spain",
					"visits": 711,
					"color": "#0D8ECF"
				}, {
					"country": "Netherlands",
					"visits": 665,
					"color": "#0D52D1"
				}, {
					"country": "Russia",
					"visits": 580,
					"color": "#2A0CD0"
				}, {
					"country": "South Korea",
					"visits": 443,
					"color": "#8A0CCF"
				}, {
					"country": "Canada",
					"visits": 441,
					"color": "#CD0D74"
				}, {
					"country": "Brazil",
					"visits": 395,
					"color": "#754DEB"
				}, {
					"country": "Italy",
					"visits": 386,
					"color": "#DDDDDD"
				}, {
					"country": "Taiwan",
					"visits": 338,
					"color": "#333333"
				}],
				"valueAxes": [{
					"position": "left",
					"axisAlpha":0,
					"gridAlpha":0
				}],
				"graphs": [{
					"balloonText": "[[category]]: <b>[[value]]</b>",
					"colorField": "color",
					"fillAlphas": 0.85,
					"lineAlpha": 0.1,
					"type": "column",
					"topRadius":1,
					"valueField": "visits"
				}],
				"depth3D": 40,
				"angle": 30,
				"chartCursor": {
					"categoryBalloonEnabled": false,
					"cursorAlpha": 0,
					"zoomable": false
				},
				"categoryField": "country",
				"categoryAxis": {
					"gridPosition": "start",
					"axisAlpha":0,
					"gridAlpha":0

				},
				"export": {
					"enabled": true
				}

			}, 0);
		</script>
		<!-- Chart code -->
		<script>
			var chart = AmCharts.makeChart("chartdiv1", {
				"type": "serial",
				"theme": "light",
				"legend": {
					"horizontalGap": 10,
					"maxColumns": 1,
					"position": "right",
					"useGraphSettings": true,
					"markerSize": 10
				},
				"dataProvider": [{
					"year": 2017,
					"europe": 2.5,
					"namerica": 2.5,
					"asia": 2.1,
					"lamerica": 0.3,
					"meast": 0.2,
					"africa": 0.1
				}, {
					"year": 2016,
					"europe": 2.6,
					"namerica": 2.7,
					"asia": 2.2,
					"lamerica": 0.3,
					"meast": 0.3,
					"africa": 0.1
				}, {
					"year": 2015,
					"europe": 2.8,
					"namerica": 2.9,
					"asia": 2.4,
					"lamerica": 0.3,
					"meast": 0.3,
					"africa": 0.1
				}],
				"valueAxes": [{
					"stackType": "regular",
					"axisAlpha": 0.5,
					"gridAlpha": 0
				}],
				"graphs": [{
					"balloonText": "<b>[[title]]</b><br><span style='font-size:14px'>[[category]]: <b>[[value]]</b></span>",
					"fillAlphas": 0.8,
					"labelText": "[[value]]",
					"lineAlpha": 0.3,
					"title": "Europe",
					"type": "column",
					"color": "#000000",
					"valueField": "europe"
				}, {
					"balloonText": "<b>[[title]]</b><br><span style='font-size:14px'>[[category]]: <b>[[value]]</b></span>",
					"fillAlphas": 0.8,
					"labelText": "[[value]]",
					"lineAlpha": 0.3,
					"title": "North America",
					"type": "column",
					"color": "#000000",
					"valueField": "namerica"
				}, {
					"balloonText": "<b>[[title]]</b><br><span style='font-size:14px'>[[category]]: <b>[[value]]</b></span>",
					"fillAlphas": 0.8,
					"labelText": "[[value]]",
					"lineAlpha": 0.3,
					"title": "Asia-Pacific",
					"type": "column",
					"color": "#000000",
					"valueField": "asia"
				}, {
					"balloonText": "<b>[[title]]</b><br><span style='font-size:14px'>[[category]]: <b>[[value]]</b></span>",
					"fillAlphas": 0.8,
					"labelText": "[[value]]",
					"lineAlpha": 0.3,
					"title": "Latin America",
					"type": "column",
					"color": "#000000",
					"valueField": "lamerica"
				}, {
					"balloonText": "<b>[[title]]</b><br><span style='font-size:14px'>[[category]]: <b>[[value]]</b></span>",
					"fillAlphas": 0.8,
					"labelText": "[[value]]",
					"lineAlpha": 0.3,
					"title": "Middle-East",
					"type": "column",
					"color": "#000000",
					"valueField": "meast"
				}, {
					"balloonText": "<b>[[title]]</b><br><span style='font-size:14px'>[[category]]: <b>[[value]]</b></span>",
					"fillAlphas": 0.8,
					"labelText": "[[value]]",
					"lineAlpha": 0.3,
					"title": "Africa",
					"type": "column",
					"color": "#000000",
					"valueField": "africa"
				}],
				"rotate": true,
				"categoryField": "year",
				"categoryAxis": {
					"gridPosition": "start",
					"axisAlpha": 0,
					"gridAlpha": 0,
					"position": "left"
				},
				"export": {
					"enabled": true
				}
			});
		</script>

		<!-- //amcharts -->
		<script src="../public/admin/js/chart1.js"></script>
		<script src="js/Chart.min.js"></script>
		<script src="../public/admin/js/modernizr.custom.js"></script>

		<script src="../public/admin/js/classie.js"></script>
		<script src="../public/admin/js/gnmenu.js"></script>
		<script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		</script>
		<!-- script-for-menu -->

		<!-- /circle-->
		<script type="text/javascript" src="../public/admin/js/circles.js"></script>
		<script>
			var colors = [
			['#ffffff', '#fd9426'], ['#ffffff', '#fc3158'],['#ffffff', '#53d769'], ['#ffffff', '#147efb']
			];
			for (var i = 1; i <= 7; i++) {
				var child = document.getElementById('circles-' + i),
				percentage = 30 + (i * 10);

				Circles.create({
					id:         child.id,
					percentage: percentage,
					radius:     80,
					width:      10,
					number:   	percentage / 1,
					text:       '%',
					colors:     colors[i - 1]
				});
			}

		</script>
		<!-- //circle -->
		<!--skycons-icons-->
		<script src="../public/admin/js/skycons.js"></script>
		<script>
			var icons = new Skycons({"color": "#fcb216"}),
			list  = [
			"partly-cloudy-day"
			],
			i;

			for(i = list.length; i--; )
				icons.set(list[i], list[i]);
			icons.play();
		</script>
		<script>
			var icons = new Skycons({"color": "#fff"}),
			list  = [
			"clear-night","partly-cloudy-night", "cloudy", "clear-day", "sleet", "snow", "wind","fog"
			],
			i;

			for(i = list.length; i--; )
				icons.set(list[i], list[i]);
			icons.play();
		</script>
		<!--//skycons-icons-->
		<script type="text/javascript" src="../public/admin/js/jquery.basictable.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				$('#table').basictable();

				$('#table-breakpoint').basictable({
					breakpoint: 768
				});

				$('#table-swap-axis').basictable({
					swapAxis: true
				});

				$('#table-force-off').basictable({
					forceResponsive: false
				});

				$('#table-no-resize').basictable({
					noResize: true
				});

				$('#table-two-axis').basictable();

				$('#table-max-height').basictable({
					tableWrapper: true
				});

				$("ul.gn-submenu").slideUp('slow');

				$("ul.gn-menu li").hover(function () {
					$(this).children("ul.gn-submenu").slideDown('fast');
				}, function () {
					$(this).children("ul.gn-submenu").slideUp('slow');
				});
			});
		</script>
		<!-- //js -->
		<script src="../public/admin/js/screenfull.js"></script>
		<script>
			$(function () {
				$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

				if (!screenfull.enabled) {
					return false;
				}



				$('#toggle').click(function () {
					screenfull.toggle($('#container')[0]);
				});
			});
		</script>
		<script src="../public/admin/js/flipclock.js"></script>

		<script type="text/javascript">
			var clock;

			$(document).ready(function() {

				clock = $('.clock').FlipClock({
					clockFace: 'HourlyCounter'
				});
			});
		</script>
		<script src="../Public/admin/js/bars.js"></script>
		<script src="../Public/admin/js/jquery.nicescroll.js"></script>
		<script src="../Public/admin/js/scripts.js"></script>

		<!-- <script type="text/javascript" src="../public/admin/js/bootstrap-3.1.1.min.js"></script> -->

		<script src="../Public/admin/js/bootstrap-3.1.1.min.js"></script>
	</body>
	</html>
