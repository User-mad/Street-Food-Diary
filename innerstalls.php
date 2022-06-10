<?php include 'innertop.php'; ?>
<body class="full-height" id="scrollup">



<div class="theme-layout">

	<!-- Responsive header -->
	
	<?php include 'innerheader.php'; ?>

	<?php

		$sql = "SELECT * FROM `stall_registration` ";
		$result = mysqli_query($conn, $sql);
		$count=$result->num_rows;

	?>
	

	<section>
		<div class="block remove-top">
			<div class="container">
				<div class="row">

					

					<div class="col-lg-8 column">
						<div class="ml-filterbar">
							<h3><i class="flaticon-eye"></i><?php echo $count; ?> Results Found</h3>
							<ul>
								<li class="doubleplaces"><span><i class="fa fa-th-large"></i></span></li>
								<li class="listingplaces"><span><i class="fa fa-th-list"></i></span></li>
							</ul>
						</div>
						<div class="ml-placessec">
							<div class="row">
							
							<?php
                
								while($r = mysqli_fetch_array($result))
								{
									$sql2 = "SELECT category_name FROM `stall_category_table` WHERE `category_id` = '$r[stall_category_id]'";
									$result2 = mysqli_query($conn, $sql2);
									$r2 = mysqli_fetch_array($result2);

									$sql3 = "SELECT vcontact FROM `vendor_registration` WHERE `vid` = '$r[vendor_id]'";
									$result3 = mysqli_query($conn, $sql3);
									$r3 = mysqli_fetch_array($result3);
									
									$status = 'Active';
									if($r['status'] == 1)
									{
										$status = "Active";
									}
									else
									{
										$status = "Inactive";
									}
							
							?>

								<div class="col-lg-6">
									<div class="places">
										<div class="placethumb">
											<img src="images/resource/r4.jpg" alt="" />
											
										</div>
										<div class="boxplaces">
											<div class="placeinfos">
												<h3><a href="innerstalldetails.php?id=<?php echo $r['stall_id']; ?>&category=<?php echo $r2['category_name'] ?>" title=""><?php echo $r['stall_name'] ?></a></h3>
												<span>Delicious, <?php echo $r2['category_name'] ?> for You</span>
												<ul class="listmetas">
													<li><span class="rated">3.5</span>3 Ratings</li>
													<li><i class="flaticon-chef"></i>Stall</li>
													<li><?php echo $status ?></li>
												</ul>
											</div>
											<div class="placedetails">
												<span class="pull-left"><i class="flaticon-pin"></i>Ahmedabad - <?php echo $r['address_line_3'] ?></span>
												<span class="pull-right"><i class="flaticon-phone-call"></i>+91 <?php echo $r3['vcontact'] ?></span>
											</div>
										</div>
									</div><!-- Places -->
								</div>

							<?php } ?>
								
							</div>
						</div>
						
					</div>

					

					<div class="col-lg-4 column">
						<div class="mlfilter-sec static">
							<div class="mltitle">
								<h3>Filters</h3>
							</div>
							<div class="mfilterform">
								<form>
									<div class="row">
										<div class="col-lg-6">
											<div class="mlfield drop">
												<input type="text" placeholder="Price" />
												<i class="fa fa-money"></i>
												<div class="prices-dropsec">
													<div class="prices-drop">
														<p>What is the price range?</p>
														<span><i>Prices</i>₹</span><span><i>Prices</i>₹₹</span><span><i>Prices</i>₹₹₹</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-6">
											<div class="mlfield">
												<select class="selectbox">
													<option>Sort By</option>
													<option></option>
													<option></option>
													<option></option>
												</select>
											</div>
										</div>
										
									</div>
								</form>	
							</div>
							<div class="mfilterform2">
								<form>
									<div class="row">
										
										<div class="col-lg-12">
											<div class="mlfield s2">
												
												<select class="selectbox" name="stall_category">
                                                <option selected="">Select Category</option>
                                                   <?php 
                                                    $query = 'Select * from stall_category_table';
                                                    $result = mysqli_query($conn,$query);

                                                    while($row = mysqli_fetch_assoc($result))
                                                    {
                                                        echo "<option value='".$row['category_id']."'>".$row['category_name']."</option>";
                                                    }
                                                   
                                                   ?>
                                            	</select>
											</div>
										</div>
										
									</div>
									
								</form>
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
<script src="js/sumoselect.js" type="text/javascript"></script>
<script src="js/isotop.js" type="text/javascript"></script>
<script src="js/jquery.nicescroll.min.js" type="text/javascript"></script>
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDQyemmm-FACOUhv1xkDj6LLHZW35iGooE&amp;sensor=true&amp;libraries=places"></script><!-- Maps -->
<script type="text/javascript" src="js/map1.js"></script>
<script type="text/javascript" src="js/jq.aminoSlider.js"></script>
<script src="js/dropdown.js" type="text/javascript"></script>

</body>


</html>

