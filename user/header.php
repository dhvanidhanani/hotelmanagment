
<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>The Spice house </title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">    
	<!-- Site CSS -->
    <link rel="stylesheet" href="../css/style.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="../css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/custom.css">
</head>
<style>
		.restaurant
		{
			margin-right:10px;
			color:brown;
			font-size: 15px;
		}
	</style>
<body>
	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="index1.html">
					<img src="images/logo.png" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div>
					
				<?php
					if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true){
				?>	
				<!-- <i class="fa-solid fa-utensils restaurant"></i><a style="font-size:15px; color:brown;margin-right:15px;">Restaurant</a> -->
				<i class="fa-solid fa-utensils restaurant"></i><a style="font-size:15px; color:brown;margin-right:15px;">Restaurant</a>
				hii
				<?php echo $_SESSION['username']; ?> &nbsp;&nbsp; <a href="cart.php">Cart</a>&nbsp;&nbsp; <a href="logout.php">LogOut</a>
				<?php	
				}
				else
				{	
				?>
				<i class="fa-solid fa-utensils restaurant"></i><a style="font-size:15px; color:brown;margin-right:15px;">Restaurant</a>
				<a href="registration.php">New User</a>&nbsp;&nbsp;&nbsp;<a href="login.php">Login</a>
				<?php
				}
				?>	
				  </div>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
				<ul class="navbar-nav ml-auto">
						<li class="nav-item"><a class="nav-link" href="index.php" style="font-size:15px;">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="menu.php" style="font-size:15px;">Menu</a></li>
						<li class="nav-item"><a class="nav-link" href="gallery.php" style="font-size:15px;">Gallery</a></li>
						<li class="nav-item"><a class="nav-link" href="viewtable.php" style="font-size:15px;">Private Dining</a></li>
						<li class="nav-item"><a class="nav-link" href="about.php" style="font-size:15px;">About Us</a></li>
						<li class="nav-item"><a class="nav-link" href="contact.php" style="font-size:15px;">Contact Us</a></li>
						<li class="nav-item"><a class="nav-link" href="review.php" style="font-size:15px;">Review</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
</body>
	<!-- End header -->
