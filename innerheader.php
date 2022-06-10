<?php

session_start();

?>

<?php
			
			if(!isset($_SESSION['uemail']))
			{
				//echo"  <script> swal('Sorry!', 'You're Not Logged In! ', 'error')
                //    .then((value) => {location.href='index.php'}); </script>";
				echo "<script>location.href='index.php'</script>";    
			}	
		
		?>


<header class="s4 dark">
		<div class="container fluid">
			<div class="logo">

				<a href="#" title=""><img src="" alt="" /></a>
			</div>
			<div class="extras">
				<span class="accountbtn"><i class="flaticon-avatar"><?php echo $_SESSION['name']; ?></i></span>
			</div>
			<nav>
				<ul>
					<li class="menu-item">
						<a href="innerhome.php" title="">Home</a>
						
					</li>
					<li class="menu-item">
						<a href="innerstalls.php" title="">Stalls</a>
						
					</li>
                    <li class="menu-item">
						<a href="blog.php" title="">Blog</a>
						
					</li>
                    <li class="menu-item">
						<a href="logout.php" title="">Logout</a>
					</li>	
				</ul>
			</nav>
		</div>

		

</header>