<?php
session_start();
include('../include/connection.php');
include "header.php";
?>

<!-- start Page -->
<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Special Menu</h1>
				</div>
			</div>
		</div>
	</div>
<!-- End page -->

<!-- Start Menu -->
<div class="menu-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Special Menu</h2>
						<p>Every day is a good day for your restaurant</p>
					</div>
				</div>
			</div>
			
			<div class="row inner-menu-box">
				<div class="col-3">
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">All</a>
						<!-- <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">KathiyaWadi</a>
						<a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">RajsThani</</a>
						<a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Rise</a>
						<a class="nav-link" id="v-pills-tava-tab" data-toggle="pill" href="#v-pills-tava" role="tab" aria-controls="v-pills-tava" aria-selected="false">tava</a>
						<a class="nav-link" id="v-pills-desert-tab" data-toggle="pill" href="#v-pills-desert" role="tab" aria-controls="v-pills-desert" aria-selected="false">Desert</a>
						<a class="nav-link" id="v-pills-dhosa-tab" data-toggle="pill" href="#v-pills-dhosa" role="tab" aria-controls="v-pills-dhosa" aria-selected="false">Dhosa</a> -->
                        <?php
                    // getcategories();
                    // function getcategories(){
                        global $con;
                            $select_categories="select * from `categories`";
                            $result=mysqli_query($con,$select_categories);
                            while($row_data=mysqli_fetch_assoc($result)){
                                $category_title=$row_data['categories_title'];
                                $category_id=$row_data['categories_id'];
                                // echo  $category_title;
                                echo "<li class='nav-item'>
                                <a href='2.php?categories=$category_id' class='nav-link ' role='tab'> $category_title </a> </li>";
                            }
                    // }
                ?>
					</div>
				</div>
				
				<div class="col-9">
					<div class="tab-content" id="v-pills-tabContent">
						<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
							<div class="row">
								<?php
								$s = mysqli_query($con,"select * from menu");
								while($r = mysqli_fetch_array($s))
								{	
								?>
								<div class="col-lg-4 col-md-6 special-grid drinks">
									<div class="gallery-single fix">
										<img src="../admin/<?php echo $r['image']; ?>" class="img-fluid" alt="Image" style='width: 263px; height:170px;'>
										<div class="why-text">
											<h4><?php echo $r['title']; ?></h4>
											<p><?php echo $r['description']; ?></p>
											<p>Rs <?php echo $r['price']; ?> /-</p>
											<h5 align="center">
									<?php if(isset($_SESSION['username']))
									{
									?>
											<a href="addcart.php?pid=<?php echo $r['id']; ?>&username=<?php echo $_SESSION['username']; ?>&price=<?php echo $r['price']; ?>">Add Cart</a></h5>

									<?php
									}
									else
									{
									?>
										<a href="login.php">Add Cart</a>
									<?php } ?>

										</div>
									</div>
								</div>
								<?php } ?>
							</div>	
						</div>


						<div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
							<div class="row">
							<?php
								$s = mysqli_query($con,"select * from menu where category='rise'");
								while($r = mysqli_fetch_array($s))
								{	
								?>
								<div class="col-lg-4 col-md-6 special-grid drinks">
									<div class="gallery-single fix">
										<img src="../admin/<?php echo $r['image']; ?>" class="img-fluid" alt="Image" style='width: 263px; height:170px;'>
										<div class="why-text">
											<h4><?php echo $r['title']; ?></h4>
											<p><?php echo $r['description']; ?></p>
											<p>Rs <?php echo $r['price']; ?> /-</p>
											<h5 align="center">
									<?php if(isset($_SESSION['username']))
									{
									?>
											<a href="addcart.php?pid=<?php echo $r['id']; ?>&username=<?php echo $_SESSION['username']; ?>&price=<?php echo $r['price']; ?>">Add Cart</a></h5>

									<?php
									}
									else
									{
									?>
										<a href="login.php">Add Cart</a>
									<?php } ?>

										</div>
									</div>
								</div>
								<?php } ?>


							<?php 
								$s = mysqli_query($con,"select * from menu where category='kathiyawadi'");
								while($r = mysqli_fetch_array($s))
								{	
								?>

								<div class="col-lg-4 col-md-6 special-grid drinks">
									<div class="gallery-single fix">
										<img src="../admin/<?php echo $r['image']; ?>" class="img-fluid" alt="Image" style='width: 263px; height:170px;'>
										<div class="why-text">
											<h4><?php echo $r['title']; ?></h4>
											<p><?php echo $r['description']; ?></p>
											<h5>Rs <?php echo $r['price']; ?> /-</h5>
											<h5 align="center">
												<?php if(isset($_SESSION['username']))
									{
									?>
											<a href="addcart.php?pid=<?php echo $r['id']; ?>&username=<?php echo $_SESSION['username']; ?>&price=<?php echo $r['price']; ?>">Add Cart</a></h5>

									<?php
									}
									else
									{
									?>
										<a href="login.php">Add Cart</a>
									<?php } ?>

											</h5>
										</div>
									</div>
								</div>
								<?php } ?>	
							</div>
						</div>
						


						<div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
						<div class="row">
        <?php
      $s = mysqli_query($con,"select * from menu where category='rajasthani'");
        // Check if any items are available
        if(mysqli_num_rows($s) > 0) {
            while($r = mysqli_fetch_array($s)) {	
        ?>
            <div class="col-lg-4 col-md-6 special-grid drinks">
                <div class="gallery-single fix">
                    <img src="../admin/<?php echo $r['image']; ?>" class="img-fluid" alt="Image" style='width: 263px; height:170px;'>
                    <div class="why-text">
                        <h4><?php echo $r['title']; ?></h4>
                        <p><?php echo $r['description']; ?></p>
                        <h5>Rs <?php echo $r['price']; ?> /-</h5>
                        <h5 align="center">
                            <?php if(isset($_SESSION['username'])) { ?>
                                <a href="addcart.php?pid=<?php echo $r['id']; ?>&username=<?php echo $_SESSION['username']; ?>&price=<?php echo $r['price']; ?>">Add Cart</a>
                            <?php } else { ?>
                                <a href="login.php">Add Cart</a>
                            <?php } ?>
                        </h5>
                    </div>
                </div>
            </div>
        <?php
            }
        } else {
            // Display a message if no items are available
			echo "<p style='text-align: center; color: red; font-size: 25px;'>Rajasthani is not available in menu.</p>";
        }
        ?>     
    </div>
						</div>



						<div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
    <div class="row">
        <?php
        $s = mysqli_query($con,"select * from menu where category='rise'");
        // Check if any items are available
        if(mysqli_num_rows($s) > 0) {
            while($r = mysqli_fetch_array($s)) {	
        ?>
            <div class="col-lg-4 col-md-6 special-grid drinks">
                <div class="gallery-single fix">
                    <img src="../admin/<?php echo $r['image']; ?>" class="img-fluid" alt="Image" style='width: 263px; height:170px;'>
                    <div class="why-text">
                        <h4><?php echo $r['title']; ?></h4>
                        <p><?php echo $r['description']; ?></p>
                        <h5>Rs <?php echo $r['price']; ?> /-</h5>
                        <h5 align="center">
                            <?php if(isset($_SESSION['username'])) { ?>
                                <a href="addcart.php?pid=<?php echo $r['id']; ?>&username=<?php echo $_SESSION['username']; ?>&price=<?php echo $r['price']; ?>">Add Cart</a>
                            <?php } else { ?>
                                <a href="login.php">Add Cart</a>
                            <?php } ?>
                        </h5>
                    </div>
                </div>
            </div>
        <?php
            }
        } else {
            // Display a message if no items are available
			echo "<p style='text-align: center; color: red; font-size: 25px;'>Rise is not available in menu.</p>";


        }
        ?>     
    </div>
</div>



<div class="tab-pane fade" id="v-pills-tava" role="tabpanel" aria-labelledby="v-pills-tava-tab">
    <div class="row">
        <?php
        $s = mysqli_query($con,"select * from menu where category='tava'");
        // Check if any items are available
        if(mysqli_num_rows($s) > 0) {
            while($r = mysqli_fetch_array($s)) {	
        ?>
            <div class="col-lg-4 col-md-6 special-grid drinks">
                <div class="gallery-single fix">
                    <img src="../admin/<?php echo $r['image']; ?>" class="img-fluid" alt="Image" style='width: 263px; height:170px;'>
                    <div class="why-text">
                        <h4><?php echo $r['title']; ?></h4>
                        <p><?php echo $r['description']; ?></p>
                        <h5>Rs <?php echo $r['price']; ?> /-</h5>
                        <h5 align="center">
                            <?php if(isset($_SESSION['username'])) { ?>
                                <a href="addcart.php?pid=<?php echo $r['id']; ?>&username=<?php echo $_SESSION['username']; ?>&price=<?php echo $r['price']; ?>">Add Cart</a>
                            <?php } else { ?>
                                <a href="login.php">Add Cart</a>
                            <?php } ?>
                        </h5>
                    </div>
                </div>
            </div>
        <?php
            }
        } else {
            // Display a message if no items are available
            echo "<p style='text-align: center; color: red; font-size: 25px;'>Tava is not available in the menu.</p>";
        }
        ?>     
    </div>
</div>


						<div class="tab-pane fade" id="v-pills-desert" role="tabpanel" aria-labelledby="v-pills-desert-tab">
						<div class="row">
        <?php
        $s = mysqli_query($con,"select * from menu where category='desert'");
        // Check if any items are available
        if(mysqli_num_rows($s) > 0) {
            while($r = mysqli_fetch_array($s)) {	
        ?>
            <div class="col-lg-4 col-md-6 special-grid drinks">
                <div class="gallery-single fix">
                    <img src="../admin/<?php echo $r['image']; ?>" class="img-fluid" alt="Image" style='width: 263px; height:170px;'>
                    <div class="why-text">
                        <h4><?php echo $r['title']; ?></h4>
                        <p><?php echo $r['description']; ?></p>
                        <h5>Rs <?php echo $r['price']; ?> /-</h5>
                        <h5 align="center">
                            <?php if(isset($_SESSION['username'])) { ?>
                                <a href="addcart.php?pid=<?php echo $r['id']; ?>&username=<?php echo $_SESSION['username']; ?>&price=<?php echo $r['price']; ?>">Add Cart</a>
                            <?php } else { ?>
                                <a href="login.php">Add Cart</a>
                            <?php } ?>
                        </h5>
                    </div>
                </div>
            </div>
        <?php
            }
        } else {
            // Display a message if no items are available
            echo "<p style='text-align: center; color: red; font-size: 25px;'>desert is not available in the menu.</p>";
        }
        ?>     
    </div>
        </div>


		<div class="tab-pane fade" id="v-pills-dhosa" role="tabpanel" aria-labelledby="v-pills-dhosa-tab">
		<div class="row">
        <?php
        $s = mysqli_query($con,"select * from menu where category='dhosa'");
        // Check if any items are available
        if(mysqli_num_rows($s) > 0) {
            while($r = mysqli_fetch_array($s)) {	
        ?>
            <div class="col-lg-4 col-md-6 special-grid drinks">
                <div class="gallery-single fix">
                    <img src="../admin/<?php echo $r['image']; ?>" class="img-fluid" alt="Image" style='width: 263px; height:170px;'>
                    <div class="why-text">
                        <h4><?php echo $r['title']; ?></h4>
                        <p><?php echo $r['description']; ?></p>
                        <h5>Rs <?php echo $r['price']; ?> /-</h5>
                        <h5 align="center">
                            <?php if(isset($_SESSION['username'])) { ?>
                                <a href="addcart.php?pid=<?php echo $r['id']; ?>&username=<?php echo $_SESSION['username']; ?>&price=<?php echo $r['price']; ?>">Add Cart</a>
                            <?php } else { ?>
                                <a href="login.php">Add Cart</a>
                            <?php } ?>
                        </h5>
                    </div>
                </div>
            </div>
        <?php
            }
        } else {
            // Display a message if no items are available
            echo "<p style='text-align: center; color: red; font-size: 25px;'>Tava is not available in the menu.</p>";
        }
        ?>     
    </div>
        </div>
		
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- End Menu -->

<?php
include "footer.php";
?>