
<?php 
$sqlSelect="SELECT about.AboutId, `AboutName`, `AboutWinsor`, `EmployeeCode`,`ImgAboutId`, `ImgAbout` FROM `about`, `imgabout` where about.AboutId = imgabout.AboutId";
$list_about= mysql_query($sqlSelect);
?>
<!-- breadcrumbs -->
<div class="breadcrumb_dress">
	<div class="container">
		<ul>
			<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> <i>/</i></li>
			<li>About Us</li>
		</ul>
	</div>
</div>
<!-- //breadcrumbs -->

<!-- about -->
<div class="about">
	<div class="container">	
		<div class="w3ls_about_grids">
			<?php 
			while(list($AboutId,$AboutName,$AboutWinsor,$EmployeeCode, $ImgAboutId, $ImgAbout) = mysql_fetch_array($list_about))
			{
				?>
				<h1><?=$AboutName?></h1>
				<hr/>
				<div class="col-md-6 w3ls_about_grid_left">
					<p><?=$AboutWinsor?></p>
				</div>
				<div class="col-md-6 w3ls_about_grid_right">
					<img src="<?php echo "Public/admin/images_about/".$ImgAbout; ?>" alt=" " class="img-responsive" />
				</div>
				<div class="clearfix"> </div>
				<?php
			}
			?>
		</div>
	</div>
</div>
<!-- //about -->

<!-- team -->
<div class="team">
	<div class="container">
		<h3>Meet Our Team</h3>
		<div class="wthree_team_grids">
			<div class="col-md-4 wthree_team_grid">
				<img src="public/client/images/8.png" alt=" " class="img-responsive" />
				<h4>Smith Allen <span>Fashion Designer</span></h4>
				<div class="agileits_social_button">
					<ul>
						<li><a href="#" class="facebook"> </a></li>
						<li><a href="#" class="twitter"> </a></li>
						<li><a href="#" class="google"> </a></li>
						<li><a href="#" class="pinterest"> </a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-4 wthree_team_grid">
				<img src="public/client/images/9.png" alt=" " class="img-responsive" />
				<h4>Laura James <span>Fashion Designer</span></h4>
				<div class="agileits_social_button">
					<ul>
						<li><a href="#" class="facebook"> </a></li>
						<li><a href="#" class="twitter"> </a></li>
						<li><a href="#" class="google"> </a></li>
						<li><a href="#" class="pinterest"> </a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-4 wthree_team_grid">
				<img src="public/client/images/10.png" alt=" " class="img-responsive" />
				<h4>Crisp Doe <span>Fashion Designer</span></h4>
				<div class="agileits_social_button">
					<ul>
						<li><a href="#" class="facebook"> </a></li>
						<li><a href="#" class="twitter"> </a></li>
						<li><a href="#" class="google"> </a></li>
						<li><a href="#" class="pinterest"> </a></li>
					</ul>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- //team -->