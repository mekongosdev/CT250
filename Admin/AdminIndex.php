
<!DOCTYPE HTML>
<html lang="vi">
<head>
	<title>CT250 - Windsor</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Minimal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- Custom Theme files -->
	<link rel="stylesheet" type="text/css" href="../Public/Adminstrator/css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript" src="../Public/Adminstrator/js/jquery.min.js"></script>

	<!-- Mainly scripts -->

	<script src="../Public/Adminstrator/js/jquery.metisMenu.js"></script>

	<script src="../Public/Adminstrator/js/jquery.slimscroll.min.js"></script>
	<!-- Custom and plugin javascript -->
	<link rel="stylesheet" type="text/css" href="../Public/Adminstrator/css/custom.css">
	<script type="text/javascript" src="../Public/Adminstrator/js/custom.js"></script>
	<script type="text/javascript" src="../Public/Adminstrator/js/screenfull.js"></script>

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

<!----->

<!--pie-chart--->

<script src="../Public/Adminstrator/js/pie-chart.js"></script>
 <script type="text/javascript">

        $(document).ready(function () {
            $('#demo-pie-1').pieChart({
                barColor: '#3bb2d0',
                trackColor: '#eee',
                lineCap: 'round',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-2').pieChart({
                barColor: '#fbb03b',
                trackColor: '#eee',
                lineCap: 'butt',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-3').pieChart({
                barColor: '#ed6498',
                trackColor: '#eee',
                lineCap: 'square',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

           
        });

    </script>
    <!--skycons-icons-->
    <script type="text/javascript" src="../Public/Adminstrator/js/skycons.js"></script>

    <!--//skycons-icons-->
  </head>
  <body>
    <?php 
    include_once("../Library/connect.php");
    ?>
    <div id="wrapper">

<!----->
        <nav class="navbar-default navbar-static-top" role="navigation">
             <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <h1> <a class="navbar-brand" href="index.html">Windsor</a></h1>         
			   </div>
			 <div class=" border-bottom">
        	<div class="full-left">
        	  <section class="full-top">
				<button id="toggle"><i class="fa fa-arrows-alt"></i></button>	
			</section>
			<form class=" navbar-left-right">
              <input type="text"  value="Search..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search...';}">
              <input type="submit" value="" class="fa fa-search">
            </form>
            <div class="clearfix"> </div>
           </div>
     
       
           <!-- Brand and toggle get grouped for better mobile display -->

           <!-- Collect the nav links, forms, and other content for toggling -->
           <div class="drop-men" >
           	<ul class=" nav_1">

           		<li class="dropdown at-drop">
           			<a href="#" class="dropdown-toggle dropdown-at " data-toggle="dropdown"><i class="fa fa-globe"></i> <span class="number">5</span></a>
           			<ul class="dropdown-menu menu1 " role="menu">
           				<li><a href="#">

           					<div class="user-new">
           						<p>New user registered</p>
           						<span>40 seconds ago</span>
           					</div>
           					<div class="user-new-left">

           						<i class="fa fa-user-plus"></i>
           					</div>
           					<div class="clearfix"> </div>
           				</a></li>
           				<li><a href="#">
           					<div class="user-new">
           						<p>Someone special liked this</p>
           						<span>3 minutes ago</span>
           					</div>
           					<div class="user-new-left">

           						<i class="fa fa-heart"></i>
           					</div>
           					<div class="clearfix"> </div>
           				</a></li>
           				<li><a href="#">
           					<div class="user-new">
           						<p>John cancelled the event</p>
           						<span>4 hours ago</span>
           					</div>
           					<div class="user-new-left">

           						<i class="fa fa-times"></i>
           					</div>
           					<div class="clearfix"> </div>
           				</a></li>
           				<li><a href="#">
           					<div class="user-new">
           						<p>The server is status is stable</p>
           						<span>yesterday at 08:30am</span>
           					</div>
           					<div class="user-new-left">

           						<i class="fa fa-info"></i>
           					</div>
           					<div class="clearfix"> </div>
           				</a></li>
           				<li><a href="#">
           					<div class="user-new">
           						<p>New comments waiting approval</p>
           						<span>Last Week</span>
           					</div>
           					<div class="user-new-left">

           						<i class="fa fa-rss"></i>
           					</div>
           					<div class="clearfix"> </div>
           				</a></li>
           				<li><a href="#" class="view">View all messages</a></li>
           			</ul>
           		</li>
           		<li class="dropdown">
           			<a href="#" class="dropdown-toggle dropdown-at" data-toggle="dropdown"><span class=" name-caret">Rackham<i class="caret"></i></span><img src="../Public/Adminstrator/images/wo.jpg
           				"></a>
           				<ul class="dropdown-menu " role="menu">
           					<li><a href="#"><i class="fa fa-user"></i>Edit Profile</a></li>
           					<li><a href="#"><i class="fa fa-envelope"></i>Inbox</a></li>
           					<li><a href="#"><i class="fa fa-calendar"></i>Calender</a></li>
           					<li><a href="#"><i class="fa fa-clipboard"></i>Tasks</a></li>
           				</ul>
           			</li>

           		</ul>
           	</div><!-- /.navbar-collapse -->
           	<div class="clearfix">

           	</div>

           	<div class="navbar-default sidebar" role="navigation">
           		<div class="sidebar-nav navbar-collapse">
           			<ul class="nav" id="side-menu">

           				<li>
           					<a href="index.html" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">ĐIỀU HƯỚNG</span> </a>
           				</li>

           				<li>
           					<a href="#" class=" hvr-bounce-to-right"><i class="fa fa-user-circle-o nav_icon"></i> <span class="nav-label">Quản Trị Hệ Thống</span><span class="fa arrow"></span></a>
           					<ul class="nav nav-second-level">
           						<li><a href="#" class=" hvr-bounce-to-right"> <i class="fa fa-university nav_icon"></i>Hình Thức Thanh Toán</a></li>

           						<li><a href="#" class=" hvr-bounce-to-right"><i class="fa fa-history nav_icon"></i>Lịch Sử và Chi Nhánh</a></li>

           						<li><a href="#" class=" hvr-bounce-to-right"><i class="fa fa-street-view nav_icon"></i>Nhân Viên</a></li>

           					</ul>
           				</li>
           				<li>
           					<a href="#" class=" hvr-bounce-to-right"><i class="fa fa-inbox nav_icon"></i> <span class="nav-label">Nhân Viên	</span><span class="fa arrow"></span> </a>
           					<ul class="nav nav-second-level">
           						<li><a href="#" class=" hvr-bounce-to-right"> <i class="fa fa-area-chart nav_icon"></i>Nhà sản xuất</a></li>

           						<li><a href="?keywords=category" class=" hvr-bounce-to-right"><i class="fa fa-cubes nav_icon"></i>Loại sản phẩm</a></li>

           						<li><a href="#" class=" hvr-bounce-to-right"><i class="fa fa-sellsy nav_icon"></i>Khuyến mãi</a></li>
           						<li><a href="#" class="hvr-bounce-to-right"><i class="fa fa-home nav_icon"></i>Quốc gia</a></li>
           						<li><a href="#" class="hvr-bounce-to-right"><i class="fa fa-beer nav_icon"></i>Rượu</a></li>
           						<li><a href="#" class="hvr-bounce-to-right"><i class="fa fa-newspaper-o nav_icon"></i>Tin Tức</a></li>
           						<li><a href="#" class="hvr-bounce-to-right"><i class="fa fa-check nav_icon"></i>Phản hồi</a></li>
           						<li><a href="#" class="hvr-bounce-to-right"><i class="fa fa-envelope-open-o nav_icon"></i>Liên hệ</a></li>
           						<li><a href="#" class="hvr-bounce-to-right"><i class="fa fa-calendar-plus-o nav_icon"></i>Hóa đơn</a></li>
           					</ul>
           				</li>

           				<li>
           					<a href="#" class=" hvr-bounce-to-right"><i class="fa fa-tags nav_icon"></i> <span class="nav-label">Thống Kê</span> </a>
           				</li>
           				
           				<li>
           					<a href="#" class=" hvr-bounce-to-right"><i class="fa fa-envelope-open-o  nav_icon"></i> <span class="nav-label">Xác Thực Email</span> </a>
           				</li>

           				<li>
           					<a href="#" class=" hvr-bounce-to-right"><i class="fa fa-users  nav_icon"></i> <span class="nav-label">Quản lý người dùng</span> </a>
           				</li>

           				<li>
           					<a href="#" class=" hvr-bounce-to-right"><i class="fa fa-bolt nav_icon"></i> <span class="nav-label">Phân quyền</span> </a>
           				</li>
           			</ul>
           		</div>
           	</div>
           </nav>
           <div id="page-wrapper" class="gray-bg dashbard-1">
           	<div class="content-main">

           		<!--banner-->	
           		<div class="banner">

           			<h2>
           				<a href="AdminIndex.php">Trang Chủ</a>
           				<i class="fa fa-angle-right"></i>
           				<span>Điều hướng</span>
           			</h2>
           		</div>
           		<!--//banner-->
           		<!--content-->
              <div class="row">
                
             
              <?php 

              if(isset($_GET['keywords']))
              {
                if($_GET['keywords'] == "category")
                  include("../Src/Category/Category.php");
        // if($_GET['cn'] == "ds_nsx")
        //   include("php_gui/nhasanxuat_danhsach.php");

        // if($_GET['cn'] == "km_ds")
        //   include("php_gui/khuyenmai_danhsach.php");  
        // if($_GET['cn'] == "km_them")
        //   include("php_gui/khuyenmai_them.php");

        // if($_GET['cn'] == "dk")
        //   include("php_gui/tk_dangky.php");   
              }else
              {
                include("Drashboard.php");
              }
              ?>

 </div>

              <!---->
              <div class="copy">
               <p> &copy; 2017 Team 2 . Đặng Tuấn Huy| Nguyễn Thị Cẩm Tuyên|Lê Nguyên Thức <a href="https://www.facebook.com/groups/325740354574288" target="_blank">Niên Luận Ngành Kỹ Thuật Phần Mềm</a> </p>
             </div>
           </div>
           <div class="clearfix"> </div>
         </div>
       </div>
       <!---->
       <!--scrolling js-->
       <script type="text/javascript" src="../Public/Adminstrator/js/jquery.nicescroll.js"></script>
       <script type="text/javascript" src="../Public/Adminstrator/js/scripts.js"></script>

       <!--//scrolling js-->
       <script type="text/javascript" src="../Public/Adminstrator/js/bootstrap.min.js"></script>
       <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
       <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
       <script language="javascript">
        $(document).ready(function() {
          var table = $('#tableluna').DataTable( {
            responsive: true,
            "language": {
              "lengthMenu": "Hiển thị _MENU_ dòng dữ liệu trên một trang",
              "info": "Hiển thị _START_ trong tổng số _TOTAL_ dòng dữ liệu",
              "infoEmpty": "Dữ liệu rỗng",
              "emptyTable": "Chưa có dữ liệu nào",
              "processing": "Đang xử lý...",
              "search": "Tìm kiếm:",
              "loadingRecords": "Đang load dữ liệu...",
              "zeroRecords": "không tìm thấy dữ liệu",
              "infoFiltered": "(Được từ tổng số _MAX_ dòng dữ liệu)",
              "paginate": {
                "first": "|<",
                "last": ">|",
                "next": ">>",
                "previous": "<<"
              }
            },
            "lengthMenu": [[2, 5, 10, 15, 20, 25, 30, -1], [2, 5, 10, 15, 20, 25, 30, "Tất cả"]]
          } );
          new $.fn.dataTable.FixedHeader( table );
        } );    
      </script>   
    </body>
    </html>

