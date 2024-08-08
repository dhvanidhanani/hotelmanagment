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
					<h1>Private Dining</h1>
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
						<h2>Table</h2>
						<p>Every day is a good day for your restaurant</p>
					</div>
				</div>
			</div>
			
			<div class="row inner-menu-box">
				<div class="col-2">
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">All</a>
						<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">KathiyaWadi</a>
						<a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">RajsThani</</a>
						<a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Rise</a>
						<a class="nav-link" id="v-pills-tava-tab" data-toggle="pill" href="#v-pills-tava" role="tab" aria-controls="v-pills-tava" aria-selected="false">tava</a>
						<!-- <a class="nav-link" id="v-pills-desert-tab" data-toggle="pill" href="#v-pills-desert" role="tab" aria-controls="v-pills-desert" aria-selected="false">Desert</a> -->
						<a class="nav-link" id="v-pills-desert-tab" data-toggle="pill" href="#v-pills-desert" role="tab" aria-controls="v-pills-desert" aria-selected="false">Desert</a>
						<a class="nav-link" id="v-pills-dhosa-tab" data-toggle="pill" href="#v-pills-dhosa" role="tab" aria-controls="v-pills-dhosa" aria-selected="false">Dhosa</a>
					</div>
				</div>
                <?php
    $filtered = false;
    $value = "All Items";
    $myHeaderClass1 = "active";
    $myHeaderClass2 = "";
    $myHeaderClass3 = "";
    $myHeaderClass4 = "";
    $myHeaderClass5 = "";
    $myHeaderClass6 = "";
    $myHeaderClass7 = "";

    if (isset($_POST['all'])) {
        $GLOBALS['filtered'] = false;
        $result = display();
        $myHeaderClass1 = "active";
    }

    if (isset($_POST['marriage'])) {
        $GLOBALS['filtered'] = true;
        $GLOBALS['value'] = "Marriage";
        $result = display();
        $myHeaderClass2 = "active";
        $myHeaderClass1 = "";
    }

    if (isset($_POST['birthday'])) {
        $GLOBALS['filtered'] = true;
        $GLOBALS['value'] = "Birthday";
        $result = display();
        $myHeaderClass3 = "active";
        $myHeaderClass1 = "";
    }

    if (isset($_POST['anniversary'])) {
        $GLOBALS['filtered'] = true;
        $GLOBALS['value'] = "Anniversary";
        $result = display();
        $myHeaderClass4 = "active";
        $myHeaderClass1 = "";
    }

    if (isset($_POST['babyshower'])) {
        $GLOBALS['filtered'] = true;
        $GLOBALS['value'] = "Baby Shower";
        $result = display();
        $myHeaderClass5 = "active";
        $myHeaderClass1 = "";
    }

    if (isset($_POST['engagement'])) {
        $GLOBALS['filtered'] = true;
        $GLOBALS['value'] = "Engagement";
        $result = display();
        $myHeaderClass6 = "active";
        $myHeaderClass1 = "";
    }

    if (isset($_POST['annualfunction'])) {
        $GLOBALS['filtered'] = true;
        $GLOBALS['value'] = "Annual Function";
        $result = display();
        $myHeaderClass7 = "active";
        $myHeaderClass1 = "";
    }

    function display()
    {
        $str = "select * from addtable";

        if ($GLOBALS['filtered'] == true) {
            $str = $str . " where hallyype = '" . $GLOBALS['value'] . "';";
        }

        $conn = connection();
        $result = $conn->query($str);
        $conn->close();
        return $result;
    }

    $result = display();
    ?>
                <div class="container speciality-class box-shadow-all">
        <h1 class="h-primary center">Menu</h1>
        <form target="_self" id="foodbtns" class="food-btns" method="POST">
            <input type="submit" class="<?= $myHeaderClass1 ?> b1 food-btn box-shadow-all" name="all" value="All Items" />
            <input type="submit" class="<?= $myHeaderClass2 ?> b2 food-btn box-shadow-all " name="marriage"
                value="Marriage" />
            <input type="submit" class="<?= $myHeaderClass3 ?> b3 food-btn box-shadow-all " name="birthday"
                value="Birthday" />
            <input type="submit" class="<?= $myHeaderClass4 ?> b4 food-btn box-shadow-all " name="anniversary"
                value="Anniversary" />
            <input type="submit" class="<?= $myHeaderClass5 ?> b5 food-btn box-shadow-all " name="babyshower"
                value="Baby Shower" />
            <input type="submit" class="<?= $myHeaderClass6 ?> b6 food-btn box-shadow-all " name="engagement"
                value="Engagement" />
            <input type="submit" class="<?= $myHeaderClass7 ?> b7 food-btn box-shadow-all " name="annualfunction"
                value="Annual Function" />
        </form>
    </div>
				
				<div class="col-9">
                <div class="card-body" id="rooms-content-right">
                    <div class="paras box-shadow-all">
                        <p class="card-title sectionTag">
                            <?php echo $row['hallyype'] ?>
                        </p>
                        <p class="sectionsubTag font">
                            <?php echo $row['detail'] ?>
                        </p>
                        <p class="price">Price per Hall:
                            <?php echo $row['price'] ?>Rs
                        </p>

                        <p class="sectionsubTag font">Hall capacity:
                            <?php echo $row['capacity'] ?> Persons
                        </p>

                        <a href="addhall.php?id=<?php echo $row['id']; ?>">
                            <input type="submit" class="price-btn" value="Book Now" />
                        </a>
                    </div>
                    <div class=" box-shadow-all">
                        <img class="rooms-img" src="<?php echo getBaseUrl() . '/uploads/' . $row['image'] ?>" alt="delux" />
                    </div>
                </div>
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
						<div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
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
						<div class="tab-pane fade" id="v-pills-tava" role="tabpanel" aria-labelledby="v-pills-tava-tab">
							<div class="row">
								<?php 
								$s = mysqli_query($con,"select * from menu where category='tava'");
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
											<h5 align="center"><?php if(isset($_SESSION['username']))
									{
									?>
											<a href="addcart.php?pid=<?php echo $r['id']; ?>&username=<?php echo $_SESSION['username']; ?>&price=<?php echo $r['price']; ?>">Add Cart</a></h5>

									<?php
									}
									else
									{
									?>
										<a href="login.php">Add Cart</a>
									<?php } ?></h5>
										</div>
									</div>
								</div>
								<?php } ?>	
							</div>
						</div>
						<div class="tab-pane fade" id="v-pills-desert" role="tabpanel" aria-labelledby="v-pills-desert-tab">
            <div class="row">
                <?php 
                $s = mysqli_query($con,"select * from menu where category='desert'");
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
                                <?php if(isset($_SESSION['username'])) { ?>
                                    <a href="addcart.php?pid=<?php echo $r['id']; ?>&username=<?php echo $_SESSION['username']; ?>&price=<?php echo $r['price']; ?>">Add Cart</a>
                                <?php } else { ?>
                                    <a href="login.php">Add Cart</a>
                                <?php } ?>
                            </h5>
                        </div>
                    </div>
                </div>
                <?php } ?>    
            </div>
        </div>
		<div class="tab-pane fade" id="v-pills-dhosa" role="tabpanel" aria-labelledby="v-pills-dhosa-tab">
            <div class="row">
                <?php 
                $s = mysqli_query($con,"select * from menu where category='dhosa'");
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
                                <?php if(isset($_SESSION['username'])) { ?>
                                    <a href="addcart.php?pid=<?php echo $r['id']; ?>&username=<?php echo $_SESSION['username']; ?>&price=<?php echo $r['price']; ?>">Add Cart</a>
                                <?php } else { ?>
                                    <a href="login.php">Add Cart</a>
                                <?php } ?>
                            </h5>
                        </div>
                    </div>
                </div>
                <?php } ?>    
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