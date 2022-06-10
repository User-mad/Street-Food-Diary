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
                                <li>Blog detail</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

    <?php

		$sql = "SELECT * FROM `blog` WHERE `b_id`='$_GET[id]'";
		$result = mysqli_query($conn, $sql);
        $r = mysqli_fetch_array($result);
	?>

<section>
		<div class="block">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-8">
						<div class="singlepostsec">
							<div class="sptitle">
								<div class="blogtitle">
									<span><?php echo $r['b_date']; ?></span>
									<h3><?php echo $r['b_title']; ?></h3>
								</div>
								
							</div>
							<div class="spthumb">
								<img src="images/resource/sp1.jpg" alt="" />
							</div>
							<div class="spinfos">
								<blockquote>
									<p><?php echo $r['b_description']; ?></p>
									
								</blockquote>
									
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
