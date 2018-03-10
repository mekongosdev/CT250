	
<?php 
$WineId = $_GET['WineId'];
$result=mysql_query("SELECT WineId, WineName, WineStrength, WineShortDetails, WineDetails, WineUpdateDate,WineQuantity, wine.CategoryId, wine.PublisherId, wine.CountryId FROM wine, category, country, publisher WHERE wine.CategoryId = category.CategoryId AND wine.PublisherId = publisher.PublisherId AND wine.CountryId = country.CountryId and wine.WineId =".$WineId);
while ($row = mysql_fetch_array($result, MYSQL_ASSOC)){
	?>
	<div class="special-deals">
		<div class="container">
			<h2>Detail</h2>
			<div class="modal-body">
				<div class="col-md-5 modal_body_left">
					<div class="hs-wrapper hs-wrapper1">
					<?php
					$imgResult = mysql_query("
						SELECT ImgWine FROM imgwine, wine WHERE wine.WineId = imgwine.WineId and wine.WineId = ".$row['WineId']);
					while ($imgRow = mysql_fetch_array($imgResult, MYSQL_ASSOC)){
						echo'<img src="public/admin/images/products/'.$imgRow["ImgWine"].'" class="img-responsive" />';

					} ?>
				</div>
				</div>
				<div class="col-md-7 modal_body_right">
					<h4><?=$row['WineName']?></h4>
					<p><?=$row['WineDetails']?></p>
					<div class="rating">
						<div class="rating-left">
							<img src="public/client/images/star-.png" alt=" " class="img-responsive" />
						</div>
						<div class="rating-left">
							<img src="public/client/images/star-.png" alt=" " class="img-responsive" />
						</div>
						<div class="rating-left">
							<img src="public/client/images/star-.png" alt=" " class="img-responsive" />
						</div>
						<div class="rating-left">
							<img src="public/client/images/star.png" alt=" " class="img-responsive" />
						</div>
						<div class="rating-left">
							<img src="public/client/images/star.png" alt=" " class="img-responsive" />
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="modal_body_right_cart simpleCart_shelfItem">
						<?php 
						$sqlSelect = "
						SELECT `WineId`, `TimeId`, `PurchasePrice`, `SellingPrice`, `Note` FROM `time_wine` WHERE `WineId` ='".$row['WineId']."' order by `TimeId` desc limit 1";

						$resultPrice = mysql_query($sqlSelect);
						while ($rowPrice=mysql_fetch_array($resultPrice,MYSQL_ASSOC)) 
						{
							?>
							<p><span><?php echo  "$".$rowPrice['PurchasePrice']?></span> <i class="item_price"><?php echo  "$".$rowPrice['SellingPrice']?></i></p>
							<?php 
						}

						?> 
					</div>
					<h5>Color</h5>
					<div class="color-quality">
						<ul>
							<li><a href="#"><span></span>Red</a></li>
							<li><a href="#" class="brown"><span></span>Yellow</a></li>
							<li><a href="#" class="purple"><span></span>Purple</a></li>
							<li><a href="#" class="gray"><span></span>Violet</a></li>
						</ul>
					</div>
					<br/>
					<div class="form-group row">
						<label for="wine-quantity" class="col-sm-2 control-label">Quantity</label>
						<div class="col-sm-3">
							<div class="input-group bootstrap-touchspin">
								<input id="wine-quantity" class="form-control text-center" name="txtOrder" value="1"/>         
							</div>
						</div>
						<div class="col-sm-7">
							<div class="modal_body_right_cart simpleCart_shelfItem">
								<?php
								if ($row['WineQuantity'] > 0) 
								{
									?>
									<p><a class="item_add" href="#">Add to card</a></p>
									<?php
								} else {
									?>
									<p><a class="item_add" href="#">Out of stock</a></p>
									<?php
								}
								?>
							</div>
						</div>
					</div>         
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<?php } ?>