<?php
session_start();
include('../include/connection.php');
include "header.php";
// include 'home.php';
?>
<style>
.hall-img {
    width: 100%;
    
}

.hall-image {
    position: relative;
}


.hall-div {
    width: 80%; /* Set the width */
    /* max-width: 400px; Set maximum width */
    height: 300px; /* Set the height */
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: black;
    padding: 20px;
    text-align: center;
}




.hall-div h1, 
.hall-div button {
    margin: 10px; 
}



</style>
<!-- <body> -->	
	<div id="slides" class="cover-slides">
		<ul class="slides-container">
			<li class="text-left">
				<img src="../images/DSC_2734.jpg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20" style="font-size: 60px;"><strong>Welcome To <br> The Spice House Restaurant</strong></h1>
							<p class="m-b-40">Have It Your Way,   <br> 
							World's Greatest Hamburgers</p>
							<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="menu.php">Food Menu</a></p>
						</div>
					</div>
				</div>
			</li>
			<li class="text-left">
				<img src="../images/1-kathiyawadi-restaurants-1-ki1aq.jpg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>We like  <br> to eat well.</strong></h1>
							<p class="m-b-40">The Spice House Restaurant is serving a Authentic all Food.And Restaurant's 
<br> 
							Ambience is a very good with well trained staff with open kitchen concept...</p>
							<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="contact.php">Contact Us</a></p>
						</div>
					</div>
				</div>
			</li>
			<li class="text-left">
				<img src="../images/267.jpg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>Welcome To <br> Yamifood with The Spice House</strong></h1>
							<p class="m-b-40">Deliciousness jumping into the mouth<br> 
							We know our food..</p>
							<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="review.php">Review</a></p>
						</div>
					</div>
				</div>
			</li>
		</ul>
		<div class="slides-navigation">
			<a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
			<a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
		</div>
	</div>
	<!-- End slides -->
				<br>
	<!-- Start About -->
	<div class="about-section-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 text-center">
					<div class="inner-column">
						<h1>Welcome To <span>The Spice House Restaurent</span></h1>
						<h4>Little Story</h4>
						<p>Restaurants in Surat, Surat Restaurants, ring road restaurants, Best ring road restaurants,  Surat restaurants, Gujarati Restaurants in Surat, Gujarati near me, Gujarati Restaurants in  Surat, 
Gujarati Restaurants in ring road, 
 </p>
						<p>Quick Bites in Surat, Quick Bites near me, Quick Bites in  Surat, Quick Bites in ring road, in Surat, near me, in  Surat, in ring road, in Surat, near me, in  Surat, in ring road, New Year Parties in Surat, Christmas' Special in Surat,</p>
						<a class="btn btn-lg btn-circle btn-outline-new-white" href="contact.php">Contact Us</a>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<img src="../images/restoimage.webp"  width="200%" height="200%" class="img-fluid">
				</div>
			</div>
		</div>
	</div><br>
	<!-- End about -->
	
	<!-- Start QT -->
	<div class="qt-box qt-background">
		<div class="container">
			<div class="row">
				<div class="col-md-8 ml-auto mr-auto text-center">
					<p class="lead ">
						" If you're not the one cooking, stay out of the way and compliment the chef. "
					</p>
					<span class="lead">The Spice House Restaurent</span>
				</div>
			</div>
		</div>
	</div>
	<!-- End QT -->	
<br><br><br>
    <section id="booking-hall">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="hall-image">
                    <a href="food.php"><img class="img-fluid hall-img" src="../images/menu_bg1.jpeg" alt="hall" style="height:500px;"></a>
                    <div class="hall-div" style="top:65%; left:40%;">
					<h1 class="h1" >Explore Our Menu</h1>
                    <p>Discover a variety of delicious dishes crafted with care by our chefs.</p><br>
                        <!-- <h1 class="h1">Best Banquet Hall For Your Party</h1> -->
                        <p><a class="btn btn-lg btn-circle btn-outline-new-white" href="menu.php">View Menu</a></p>
                        <!-- <button id="book-btn" style="background-color:#d65106;height:50px; width:100px;"><a class="btn btn-lg btn-circle btn-outline-new-white" href="menu.php">View Menu</a></button> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><br><br>

	<!-- Start gallery -->
	<div class="gallery-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Gallery</h2>
						<p>Delicious food Pictures for Maher Restaurent Listed Here </p>
					</div>
				</div>
			</div>
			<div class="tz-gallery">
				<div class="row">
					
					<?php
							// include "connect.php";
							$s = mysqli_query($con,"select * from gallery order by id desc limit 6");
							while($r = mysqli_fetch_array($s))
							{
					?>
						<div class="col-sm-12 col-md-4 col-lg-4">
						
							<a class="lightbox" href="<?php echo "../admin/".$r['image']; ?>">
								<img class="img-fluid"  src="<?php echo "../admin/".$r['image']; ?>" alt="Gallery Images" style="width: 350px; height: 250px;"
								>	
							</a>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
	<!-- End gallery -->

    <!-- Start book table section -->



<!-- Start book table section -->
<section id="booking-hall">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="hall-image">
                    <a href="food.php"><img class="img-fluid hall-img" src="../images/tables.jpg" alt="hall" style="height:500px;"></a>
                    <div class="hall-div">
					<h1 class="h1">Book Your Table</h1>
                <p>Reserve your table now and enjoy an exquisite dining experience.</p><br>
                        <!-- <h1 class="h1">Best Banquet Hall For Your Party</h1> -->
                        <p><a class="btn btn-lg btn-circle btn-outline-new-white" href="viewtable.php">Book Now</a></p>
                        <!-- <button id="book-btn" style="background-color:#d65106;height:50px; width:100px;"><a href="viewtable.php" style="color:black;">Book Now</a></button> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

 
<!-- End book table section -->

	<!-- Start table -->
	<!-- <section id="booking-hall">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <a href="food.php"><img class="img-fluid hall-img" src="../admin/uploads/WhatsApp Image 2024-03-17 at 1.56.25 AM (5).jpeg" alt="hall"></a>
                <div class="hall-div">
                    <h1 class="h1">Best Banquet Hall For Your Party</h1>
                    <button id="book-btn"><a href="bookinghall.php">Book Now</a></button>
                </div>
            </div>
        </div>
    </div>
</section> -->

	<!-- End table -->

	<!-- Start review -->
	<div class="customer-reviews-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Customer Reviews</h2>
						<p>"if you build a greater experience, customer tell each other about that, word of mouth is very powerful"</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 mr-auto ml-auto text-center">
					<div id="reviews" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner mt-4">
							<?php 
							$s = mysqli_query($con,"select * from review ");	
							 while($r = mysqli_fetch_array($s))
							 {
							 ?>
							<div class="carousel-item text-center ">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="../images/quotations-button.png" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">
									<?php echo $r['name']; ?>
								</strong></h5>
								<h6 class="text-dark m-0">Review : <?php echo $r['review']; ?></h6>
								<p class="m-0 pt-3">
									<?php echo $r['description']; ?>
								</p>
							</div>
						<?php } ?>
							<div class="carousel-item text-center active">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="../images/quotations-button.png" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">AAA</strong></h5>
								<h6 class="text-dark m-0">Review : Good</h6>
								<p class="m-0 pt-3">
									Good Food, Good Health
								</p>
							</div>
						</div>
						<a class="carousel-control-prev" href="#reviews" role="button" data-slide="prev">
							<i class="fa fa-angle-left" aria-hidden="true"></i>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#reviews" role="button" data-slide="next">
							<i class="fa fa-angle-right" aria-hidden="true"></i>
							<span class="sr-only">Next</span>
						</a>
                    </div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Customer Reviews -->
	<!-- End review -->
	
		
<?php include "footer.php"; ?>