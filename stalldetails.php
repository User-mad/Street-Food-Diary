<?php include 'top.php'; ?>
<body class="full-height" id="scrollup">



<div class="theme-layout">

	<!--Header responsive-->
    <?php include 'header.php'; ?>

	<?php

		$sql = "SELECT * FROM `stall_registration` WHERE `stall_id` = '$_GET[id]'";
		$result = mysqli_query($conn, $sql);
		$r = mysqli_fetch_array($result);

		$sql3 = "SELECT vcontact FROM `vendor_registration` WHERE `vid` = '$r[vendor_id]'";
		$result3 = mysqli_query($conn, $sql3);
		$r3 = mysqli_fetch_array($result3);

		$sql4 = "SELECT aname FROM `area_table` WHERE `aid` = '$r[area_id]'";
		$result4 = mysqli_query($conn, $sql4);
		$r4 = mysqli_fetch_array($result4);

		$address = $r['address_line_1'].','.$r['address_line_2'].','.$r['address_line_3'].','.$r4['aname'];

	?>

    </br></br></br></br>

	<section>
		<div class="block no-padding">
			<div class="container fluid">
				<div class="row">
					<div class="col-lg-12">
						<ul class="restaurantslider">
							<li><img src="images/resource/rgl1.jpg" alt="" /></li>
							<li><img src="images/resource/rgl2.jpg" alt="" /></li>
							<li><img src="images/resource/rgl3.jpg" alt="" /></li>
							<li><img src="images/resource/rgl4.jpg" alt="" /></li>
							<li><img src="images/resource/rgl5.jpg" alt="" /></li>
							<li><img src="images/resource/rgl6.jpg" alt="" /></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="block no-padding gray">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="slhead">
							<div class="row">
								<div class="col-lg-6">
									<div class="sltitle">
										<h1><?php echo $r['stall_name'] ?></h1>
										<span>Delicious, <?php echo $_GET['category'] ?> food for you</span>
										<ul class="listmetas">
											<li><span class="rated">3.5</span>3 Ratings</li>
											<li><a href="#" title=""><i class="flaticon-chef"></i> Restaurant</a></li>
											<li><div class="currency"><i>₹₹₹</i>₹₹</div></li>
										</ul>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="slbtnsspans">
										<span><i class="flaticon-pin"></i><?php echo $r['address_line_3'] ?>, Ahmedabad</span>
										<span><i class="flaticon-phone-call"></i> +91 <?php echo $r3['vcontact'] ?></span>
										<div class="slbtns">
											<div class="sharelisting">
												<a href="#" title=""><i class="flaticon-share"></i>Share</a>
												<div class="sharebtns">
													<a href="#" title=""><i class="fa fa-facebook"></i></a>
													<a href="#" title=""><i class="fa fa-twitter"></i></a>
													<a href="#" title=""><i class="fa fa-instagram"></i></a>
													<a href="#" title=""><i class="fa fa-pinterest"></i></a>
													<a href="#" title=""><i class="fa fa-dribbble"></i></a>
													<a href="#" title=""><i class="fa fa-google"></i></a>
												</div>
											</div>
											
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="block">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 column">
						<div class="bbox">
							<h3>Description</h3>
							<div class="ldesc">
								<p><?php echo $r['description'] ?></p>
							</div>
						</div>
						<div class="bbox">
							<h3>Amenities</h3>
							<div class="amenties">
							<span><i class="flaticon-smoking"></i>Smoking Not Allowed</span>
								
								<?php
								$sqlcheck = 'select * from payment_service where stall_id = '.$_GET['id'];
								$resultcheck = mysqli_query($conn,$sqlcheck);
								$rcheck = mysqli_fetch_array($resultcheck);
								if($rcheck['cash_service'] == '1'){
									echo '<span><i class="flaticon-credit-card"></i>Accepts Cash</span>';
								}
								if($rcheck['scan_pay'] == '1'){
								
								echo '<span><i class="flaticon-credit-card"></i>Accept Online Payment</span>';
								}
								
								?>
								
							
							
							</div>
						</div>
						<div class="bbox">
							<h3>Menu</h3>

								<?php 
								$menufind = "Select * from menu_registration as mr, menu_item_category as mc,menu_item_name as mn  where stall_id ='".$_GET['id']."' and mr.category_id = mc.item_category_id and mr.name_id=mn.item_name_id ";
								$resultmenufind = mysqli_query($conn,$menufind);
								while($rmenufind = mysqli_fetch_array($resultmenufind)){
									echo '
									<div class="dishlist">
								<div class="dishlisthumb"><img src="images/resource/rl2.jpg" alt="" /></div>
								<div class="dishlistinfo">
									<h3>'.$rmenufind['item_name'].' <i>₹'.$rmenufind['item_price'].'</i></h3>
									<p>'.$rmenufind['item_description'].'</p>
								</div>
							</div>';
									
									
									
									
									
									
								}
								
								?>

						</div>
						<div class="bbox">
							<h3>Gallery</h3>
							<ul class="gallerylistin">
								<li><img src="images/resource/g1.jpg" alt="" /></li>
								<li><img src="images/resource/g2.jpg" alt="" /></li>
								<li><img src="images/resource/g3.jpg" alt="" /></li>
								<li><img src="images/resource/g1.jpg" alt="" /></li>
								<li><img src="images/resource/g2.jpg" alt="" /></li>
								<li><img src="images/resource/g3.jpg" alt="" /></li>
							</ul>
						</div>
						<div class="bbox">
							<h3>Reviews for <?php echo $r['stall_name'] ?></h3>
							<?php

								$sql6 = "SELECT * FROM `review` WHERE `stall_id` = '$_GET[id]'";
								$result6 = mysqli_query($conn, $sql6);
								while($r6 = mysqli_fetch_array($result6))
								{

							?>
							<div class="reviewssec">
								<div class="reviewthumb"> <img src="" alt="" /> </div>
								<div class="reviewinfo">
									<h3>Mr. Annonymus</h3>
									<span></span>
									<ul class="listmetas justrate"><li><span class="rated">3.5</span>3 Ratings</li></ul>
									<p><?php echo $r6['description']; ?></p>	
								</div>
							</div>
							<?php } ?>	
						</div>	
					</div>
					<div class="col-lg-4 column">
						<div class="openclosetiming">
							<h3>Closed <span><?php echo date('h:i a', strtotime($r['closing_time'])); ?> - <?php echo date('h:i a', strtotime($r['opening_time'])); ?></span></h3>
							<span>Monday <i><?php echo date('h:i a', strtotime($r['opening_time'])); ?> - <?php echo date('h:i a', strtotime($r['closing_time'])); ?></i></span>
							<span>Tuesday <i><?php echo date('h:i a', strtotime($r['opening_time'])); ?> - <?php echo date('h:i a', strtotime($r['closing_time'])); ?></i></span>
							<span>Wednesday <i><?php echo date('h:i a', strtotime($r['opening_time'])); ?> - <?php echo date('h:i a', strtotime($r['closing_time'])); ?></i></span>
							<span>Thursday <i><?php echo date('h:i a', strtotime($r['opening_time'])); ?> - <?php echo date('h:i a', strtotime($r['closing_time'])); ?></i></span>
							<span>Friday <i><?php echo date('h:i a', strtotime($r['opening_time'])); ?> - <?php echo date('h:i a', strtotime($r['closing_time'])); ?></i></span>
							<span>Saturday <i><?php echo date('h:i a', strtotime($r['opening_time'])); ?> - <?php echo date('h:i a', strtotime($r['closing_time'])); ?></i></span>
							<span>Sunday <i><?php echo date('h:i a', strtotime($r['opening_time'])); ?> - <?php echo date('h:i a', strtotime($r['closing_time'])); ?></i></span>
						</div>
						<div class="blocation">
							<h3>Location <a href="maps.php?address=<?php echo $address; ?>" title="">Get Direction</a></h3>
							<div class="contact-map">
								<div id="map_div">&nbsp;</div>
							</div>
							<span>Ahmedabad.</span>
							<span>+1 246-345-0695</span>
							<span>info@example.com</span>
							<div class="wsocial">
								<a href="#" title=""><i class="fa fa-facebook"></i></a>
								<a href="#" title=""><i class="fa fa-twitter"></i></a>
								<a href="#" title=""><i class="fa fa-linkedin"></i></a>
								<a href="#" title=""><i class="fa fa-pinterest"></i></a>
								<a href="#" title=""><i class="fa fa-google"></i></a>
								<a href="#" title=""><i class="fa fa-dribbble"></i></a>
							</div>
						</div>
						
						<div class="cad">
							<div class="ad"><img src="images/resource/ad.jpg" alt="" /></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php include 'bottom.php'; ?>

</div>


<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/modernizr.js" type="text/javascript"></script>
<script src="js/script.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/wow.min.js" type="text/javascript"></script>
<script src="js/slick.min.js" type="text/javascript"></script>
<script src="js/sumoselect.js" type="text/javascript"></script>
<script src="js/isotop.js" type="text/javascript"></script>
<script src="js/jquery.nicescroll.min.js" type="text/javascript"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAz77U5XQuEME6TpftaMdX0bBelQxXRlM&amp;callback=initMap"type="text/javascript"></script>

<script type="text/javascript" src="js/map2.js"></script>
<script type="text/javascript" src="js/jq.aminoSlider.js"></script>
<script src="js/dropdown.js" type="text/javascript"></script>

</body>

<!-- Mirrored from creativelayers.net/themes/findgo-html/listing-single5.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Dec 2021 02:27:48 GMT -->
</html>

