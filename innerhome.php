
<?php include 'innertop.php'; ?>

<body class="full-height" id="scrollup">

<div class="page-loading">
	<img src="images/loader.gif" alt="" />
	<span>Skip Loader</span>
</div>

<div class="theme-layout">

	<!-- Responsive header -->
	
	<?php include 'innerheader.php' ?>
	

	<section>
		<div class="block no-padding">
			<div data-velocity="-.1" style="background: url(images/resource/p2.jpg) repeat scroll 50% 422.28px transparent;" class="no-parallax parallax scrolly-invisible"></div><!-- PARALLAX BACKGROUND IMAGE -->	
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-8">
						<div class="listingsf lowmargin">
							<h3>Discover The City Gems</h3>
							<p>Find great places to visit and eat from local experts.</p>
							<div class="listingform s2">
								<form>
									<div class="fieldform">
										
										<input type="text" placeholder="What are you looking for?" style="width: 500px; background: rgb(238, 238, 238);"/>
									</div>
									<div class="fieldbtn">
										<button type="submit" style="padding: 16px 25px;">Search <i class="flaticon-magnifying-glass"></i></button>
									</div>
								</form>
							</div>
							<div class="browsehighlights">
								<span>Or Browse The Category</span>
								<div class="hightlighticons">
									<a href="" title=""><i class="flaticon-wine-glass"></i><span>Chinese</span></a>
									<a href="" title=""><i class="flaticon-hotel"></i><span>South Indian</span></a>
									<a href="" title=""><i class="flaticon-mountain"></i><span>Gujrati</span></a>
									<a href="" title=""><i class="flaticon-credit-card"></i><span>Fast Food</span></a>
									<a href="" title=""><i class="flaticon-chef"></i><span>Sandvich</span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	

	<section>
		<div class="block gray">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="heading">
							<h2>Stalls Near You</h2>
							<span>Explore the greates street food in the city. You won’t be disappointed.</span>
						</div><!-- Heading -->
						<div class="carouselplaces">
							<ul id="carouselsecs">
								<?php
							$uemail = $_SESSION['uemail'];

							$sql = "SELECT * FROM user_register where uemail = '$uemail' ";
							$result = mysqli_query($conn, $sql);
							$row = mysqli_fetch_assoc($result);
							$area = $row['uarea'];

							$stall = "Select * from stall_registration where area_id = $area";
							$result1 = mysqli_query($conn, $stall);
							while($r2 = mysqli_fetch_array($result1))
							{

							
					
							?>
							
							<li>	
									<div class="places s2">
										<div class="placethumb">
											<img src="images/resource/r1.jpg" alt="" />
											
										</div>
										<div class="placeinfos">
											<h3><a href="#" title=""><?php echo $r2['stall_name'] ?></a></h3>
											<span>Delicious, Street food for you</span>
											<ul class="listmetas">
												<li><span class="rated">3.5</span>3 Ratings</li>
												<li><a href="#" title=""><i class="flaticon-chef"></i>Stall</a></li>
												<li>Open</li>
											</ul>
										</div>
										<div class="placedetails">
											<span class="pull-left"><i class="flaticon-pin"></i>Ahmedabad, <?php echo $r2['address_line_3'] ?></span>
											<span class="pull-right"><i class="flaticon-phone-call"></i>+91 9204568231</span>
										</div>
									</div><!-- Places -->
								</li>

								<?php
								}
								?>




							
							</ul>
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
					<div class="col-lg-12">
						<div class="heading">
							<h2>See How It Works</h2>
							<span>Discover & connect with great local businesses</span>
						</div><!-- Heading -->
						<div class="howworksec">
							<div class="row">
								<div class="col-lg-4">
									<div class="howwork cc">
										<i class="flaticon-check"></i>
										<h3>Choose What To Do</h3>
										<p></p>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="howwork cc">
										<i class="flaticon-map"></i>
										<h3>Find What You Want</h3>
										<p></p>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="howwork cc">
										<i class="flaticon-planet-earth"></i>
										<h3>Amazing Places</h3>
										<p></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	

<?php include 'innerbottom.php'; ?>
</div>


<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/modernizr.js" type="text/javascript"></script>
<script src="js/script.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/wow.min.js" type="text/javascript"></script>
<script src="js/slick.min.js" type="text/javascript"></script>
<script src="js/dropdown.js" type="text/javascript"></script>
<script src="js/isotop.js" type="text/javascript"></script>

</body>

<!-- Mirrored from creativelayers.net/themes/findgo-html/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Dec 2021 02:27:20 GMT -->
</html>

