<?php include 'innertop.php'; ?>
<body class="full-height" id="scrollup">



<div class="theme-layout">

	<!-- Responsive header -->
    <?php include 'innerheader.php'; ?>

	<section>
		<div class="block less-bottom double-gap-top">
			<div class="layer blackish">
				<div data-velocity="-.1" style="background: url(images/resource/p6.jpg) repeat scroll 50% 422.28px transparent;" class="no-parallax parallax scrolly-invisible"></div><!-- PARALLAX BACKGROUND IMAGE -->	
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<div class="innertitle s2">
								<h2>Blogs </h2>
								
							</div>
						</div>
						<div class="col-lg-6">
							<ul class="breadcrumbs s2">
								<li><a href="innerhome.php" title="">Home</a></li>
								<li><a href="blog.php" title="">Blog</a></li>
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
					<div class="col-lg-12 column">
						<div class="blogsec">
							<div class="row">
								<?php

									$sql = "SELECT * FROM `blog`";
									$result = mysqli_query($conn, $sql);

								?>
								<?php
                
									while($r = mysqli_fetch_array($result))
									{
										
								?>	
								<div class="col-lg-6 col-md-6 col-sm-6">
									<div class="blogpost s2">
										<a href="blogdetails.php?id=<?php echo $r['b_id'] ?>" title=""><img src="images/resource/b1.jpg" alt="" /></a>
										<div class="blogtitle">
											<span><?php echo $r['b_date']; ?></span>
											<h3><a href="blogdetails.php?id=<?php echo $r['b_id'] ?>" title=""><?php echo $r['b_title'] ?></a></h3>
										</div>
										
									</div><!-- Blogpost -->
								</div>
								
								<?php
									}
								?>
								
							</div>
						</div>
						<div class="pagination">
							<ul>
								<li><a href="#" title=""><i class="fa fa-angle-left"></i></a></li>
								<li><a href="#" title="">1</a></li>
								<li><a href="#" title="">2</a></li>
								<li><a href="#" title="">3</a></li>
								<li><span>...</span></li>
								<li><a href="#" title="">15</a></li>
								<li><a href="#" title=""><i class="fa fa-angle-right"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Footer -->
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

