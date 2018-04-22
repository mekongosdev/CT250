			<!-- new-products -->
			<div class="new-products">
				<div class="container">
					<h3>CHIVAS</h3>
					<div class="agileinfo_new_products_grids">
						<?php 
						$result = mysql_query("
							SELECT wine.*
							FROM wine, category WHERE wine.CategoryId = category.CategoryId AND wine.CategoryId=3  ORDER BY WineUpdateDate 
							LIMIT 12");
						while ($row = mysql_fetch_array($result, MYSQL_ASSOC)){
							?>
							<div class="col-md-3 agileinfo_new_products_grid">
								<div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
									<div class="hs-wrapper hs-wrapper1">
										<?php
										$imgResult = mysql_query("
											SELECT ImgWine FROM imgwine, wine WHERE wine.WineId = imgwine.WineId and wine.WineId = ".$row['WineId']." LIMIT 6");
										while ($imgRow = mysql_fetch_array($imgResult, MYSQL_ASSOC)){
											echo'<img src="public/admin/images/products/'.$imgRow["ImgWine"].'" class="img-responsive" />';
										} ?>

										<div class="w3_hs_bottom w3_hs_bottom_sub">
											<ul>
												<li>
													<a href="index.php?page=Details&&WineId=<?=$row['WineId']?>" ><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<!-- <h5><a href="single.html">Skirts</a></h5> -->
									<?php echo  '<h5><a href="single.html">'.$row['WineName'].'</a></h5>';  ?>
									<div class="simpleCart_shelfItem">
										<?php 							
										// echo $row['WineId'] . ' ';			
										$sqlSelect2 ="select time_wine.WineId, promotionDiscount, time_wine.PurchasePrice, 
										time_wine.SellingPrice, time_wine.Note FROM wine 
										JOIN promotion_wine ON promotion_wine.WineId = wine.WineId 
										JOIN promotion ON promotion.PromotionId = promotion_wine.PromotionId 
										JOIN time_wine ON time_wine.WineId = wine.WineId 
										WHERE time_wine.WineId = {$row['WineId']} AND time_wine.WineId = wine.WineId order by `TimeId` desc LIMIT 1";

										// $sqlSelect = "
										//  SELECT `WineId`, `TimeId`, `PurchasePrice`, `SellingPrice`, 
										// `Note` FROM `time_wine` WHERE `WineId` ='".$row['WineId']."' order by `TimeId` desc limit 1";
									
										$resultPrice = mysql_query($sqlSelect2);
										while ($rowPrice=mysql_fetch_array($resultPrice,MYSQL_ASSOC)) 
										{
											?>
											<p><span><?php echo  "$".$rowPrice['SellingPrice']?> </br>
											

											</span> <i class="item_price"><?php echo  "$".$rowPrice['PurchasePrice'];?></i></p>

												</span> <i class="item_price"><?php echo "Discount".$rowPrice['promotionDiscount']."%";?></i></p>
											<?php 
										}
										if ($row['WineQuantity'] > 0) 
										{
											?>
											<p><a class="item_add" href="?action=checkout&&WineId=<?php echo  $row['WineId']?>">Add to card</a></p>
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
							<?php } ?>
						
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<!-- //new-products -->