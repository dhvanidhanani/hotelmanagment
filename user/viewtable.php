 <?php
session_start();
include("header.php");
include("../include/connection.php");

// SQL query to fetch table items
?>
<style>
    .btn 
    {
        background:#d65106;
        color:white;
    }
</style>
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
<div class="menu-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="heading-title text-center">
                    <h2>Tables</h2>
                    <p>Choose your table</p>
                </div>
            </div>
        </div>
        <div class="row inner-menu-box">
            <div class="col-3">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">All</a>
                    <a class="nav-link" id="v-pills-birthday-tab" data-toggle="pill" href="#v-pills-birthday" role="tab" aria-controls="v-pills-birthday" aria-selected="false">Birthday Table</a>
                    <a class="nav-link" id="v-pills-anniversary-tab" data-toggle="pill" href="#v-pills-anniversary" role="tab" aria-controls="v-pills-anniversary" aria-selected="false">Anniversary Table</a>

                    <a class="nav-link" id="v-pills-candlelight-tab" data-toggle="pill" href="#v-pills-candlelight" role="tab" aria-controls="v-pills-candlelight" aria-selected="false">Candlelight Table</a>

                    <a class="nav-link" id="v-pills-formal-tab" data-toggle="pill" href="#v-pills-formal" role="tab" aria-controls="v-pills-formal" aria-selected="false">Formal Table</a>
                        <!-- <a class="nav-link" id="v-pills-desert-tab" data-toggle="pill" href="#v-pills-desert" role="tab" aria-controls="v-pills-desert" aria-selected="false">Desert</a> -->
                        <a class="nav-link" id="v-pills-outdoor-tab" data-toggle="pill" href="#v-pills-outdoor" role="tab" aria-controls="v-pills-outdoor" aria-selected="false">Outdoor Table</a>
                        <a class="nav-link" id="v-pills-indoor-tab" data-toggle="pill" href="#v-pills-indoor" role="tab" aria-controls="v-pills-indoor" aria-selected="false">Indoor Table</a>
                    <!-- Add more categories here if needed -->
                </div>
            </div>
            <div class="col-9">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <div class="row">
                            <?php
                            $s = mysqli_query($con, "SELECT * FROM addtable order by rand() LIMIT 0,9");
                            while ($row = mysqli_fetch_array($s)) {
                            ?>
                                <div class="col-md-4">
                                    <div class="card mb-3 h-100">
                                        <img src="../admin/uploads/<?php echo $row['images']; ?>" class="img-fluid rounded-start" alt="<?php echo $row['tableno']; ?>"style="width: 100%; height: 150px;">
                                        <div class="card-body">
                                            <h5 class="card-title"><?php echo $row['tabletype']; ?> Table</h5>
                                            <p class="card-text"><?php echo $row['detail']; ?></p>
                                            <p class="card-text">Capacity: <?php echo $row['capacity']; ?> person/table</p>
                                            <p class="card-text">Price: <?php echo $row['price']; ?> /-</p>
                                            
                                            <?php if (isset($_SESSION['username'])) { ?>
                                                <a href="reservation.php?id=<?php echo $row['id']; ?>&username=<?php echo $_SESSION['username']; ?>&price=<?php echo $row['price']; ?>" class="btn ">Reserve</a>
                                            <?php } else { ?>
                                                <a href="login.php" class="btn ">Add Cart</a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    
                    <div class="tab-pane fade" id="v-pills-birthday" role="tabpanel" aria-labelledby="v-pills-birthday-tab">
    
    <div class="row">
        <?php
        $s = mysqli_query($con, "SELECT * FROM addtable WHERE tabletype ='Birthday'");
        // Check if any items are available
        if(mysqli_num_rows($s) > 0) {
            while($row = mysqli_fetch_array($s)) {  
        ?>
            <div class="col-lg-4 col-md-6 special-grid drinks">
                <div class="card mb-3 h-100">
                    <img src="../admin/uploads/<?php echo $row['images']; ?>" class="img-fluid rounded-start" alt="<?php echo $row['tableno']; ?>" style="width: 100%; height: 150px;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['tabletype']; ?> Table</h5>
                        <p class="card-text"><?php echo $row['detail']; ?></p>
                        <p class="card-text">Capacity: <?php echo $row['capacity']; ?> person/table</p>
                        <p class="card-text">Price: <?php echo $row['price']; ?> /-</p>
                        <?php if (isset($_SESSION['username'])) { ?>
                            <a href="reservation.php?id=<?php echo $row['id']; ?>&username=<?php echo $_SESSION['username']; ?>&price=<?php echo $row['price']; ?>" class="btn ">Reserve</a>
                        <?php } else { ?>
                            <a href="login.php" class="btn ">Add Cart</a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        <?php
            }
        } else {
            // Display a message if no items are available
            echo "<p style='text-align: center; color: red; font-size: 25px;'>No tables available for Birthday.</p>";
        }
        ?>     
    </div>
</div>

                    
<div class="tab-pane fade" id="v-pills-anniversary" role="tabpanel" aria-labelledby="v-pills-anniversary-tab">
    
    <div class="row">
        <?php
        $s = mysqli_query($con, "SELECT * FROM addtable WHERE tabletype ='Anniversary'");
        // Check if any items are available
        if(mysqli_num_rows($s) > 0) {
            while($row = mysqli_fetch_array($s)) {  
        ?>
            <div class="col-lg-4 col-md-6 special-grid drinks">
                <div class="card mb-3 h-100">
                    <img src="../admin/uploads/<?php echo $row['images']; ?>" class="img-fluid rounded-start" alt="<?php echo $row['tableno']; ?>" style="width: 100%; height: 150px;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['tabletype']; ?> Table</h5>
                        <p class="card-text"><?php echo $row['detail']; ?></p>
                        <p class="card-text">Capacity: <?php echo $row['capacity']; ?> person/table</p>
                        <p class="card-text">Price: <?php echo $row['price']; ?> /-</p>
                        <?php if (isset($_SESSION['username'])) { ?>
                            <a href="reservation.php?id=<?php echo $row['id']; ?>&username=<?php echo $_SESSION['username']; ?>&price=<?php echo $row['price']; ?>" class="btn ">Reserve</a>
                        <?php } else { ?>
                            <a href="login.php" class="btn ">Book Table</a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        <?php
            }
        } else {
            // Display a message if no items are available
            echo "<p style='text-align: center; color: red; font-size: 25px;'>No tables available for Anniversary.</p>";
        }
        ?>     
    </div>
</div>

<div class="tab-pane fade" id="v-pills-candlelight" role="tabpanel" aria-labelledby="v-pills-candlelight-tab">
    
    <div class="row">
        <?php
        $s = mysqli_query($con, "SELECT * FROM addtable WHERE tabletype ='Candlelight'");
        // Check if any items are available
        if(mysqli_num_rows($s) > 0) {
            while($row = mysqli_fetch_array($s)) {  
        ?>
            <div class="col-lg-4 col-md-6 special-grid drinks">
                <div class="card mb-3 h-100">
                    <img src="../admin/uploads/<?php echo $row['images']; ?>" class="img-fluid rounded-start" alt="<?php echo $row['tableno']; ?>" style="width: 100%; height: 150px;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['tabletype']; ?> Table</h5>
                        <p class="card-text"><?php echo $row['detail']; ?></p>
                        <p class="card-text">Capacity: <?php echo $row['capacity']; ?> person/table</p>
                        <p class="card-text">Price: <?php echo $row['price']; ?> /-</p>
                        <?php if (isset($_SESSION['username'])) { ?>
                            <a href="reservation.php?id=<?php echo $row['id']; ?>&username=<?php echo $_SESSION['username']; ?>&price=<?php echo $row['price']; ?>" class="btn ">Reserve</a>
                        <?php } else { ?>
                            <a href="login.php" class="btn ">Book Table</a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        <?php
            }
        } else {
            // Display a message if no items are available
            echo "<p style='text-align: center; color: red; font-size: 25px;'>No tables available for Candlelight Dinner.</p>";
        }
        ?>     
    </div>
</div>

<div class="tab-pane fade" id="v-pills-formal" role="tabpanel" aria-labelledby="v-pills-formal-tab">
    
    <div class="row">
        <?php
        $s = mysqli_query($con, "SELECT * FROM addtable WHERE tabletype ='Formal'");
        // Check if any items are available
        if(mysqli_num_rows($s) > 0) {
            while($row = mysqli_fetch_array($s)) {  
        ?>
            <div class="col-lg-4 col-md-6 special-grid drinks">
                <div class="card mb-3 h-100">
                    <img src="../admin/uploads/<?php echo $row['images']; ?>" class="img-fluid rounded-start" alt="<?php echo $row['tableno']; ?>" style="width: 100%; height: 150px;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['tabletype']; ?> Table</h5>
                        <p class="card-text"><?php echo $row['detail']; ?></p>
                        <p class="card-text">Capacity: <?php echo $row['capacity']; ?> person/table</p>
                        <p class="card-text">Price: <?php echo $row['price']; ?> /-</p>
                        <?php if (isset($_SESSION['username'])) { ?>
                            <a href="reservation.php?id=<?php echo $row['id']; ?>&username=<?php echo $_SESSION['username']; ?>&price=<?php echo $row['price']; ?>" class="btn ">Reserve</a>
                        <?php } else { ?>
                            <a href="login.php" class="btn ">Book Table</a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        <?php
            }
        } else {
            // Display a message if no items are available
            echo "<p style='text-align: center; color: red; font-size: 25px;'>No tables available for Formal Dinner.</p>";
        }
        ?>     
    </div>
</div>
<div class="tab-pane fade" id="v-pills-outdoor" role="tabpanel" aria-labelledby="v-pills-outdoor-tab">
    
    <div class="row">
        <?php
        $s = mysqli_query($con, "SELECT * FROM addtable WHERE tabletype ='Outdoor'");
        // Check if any items are available
        if(mysqli_num_rows($s) > 0) {
            while($row = mysqli_fetch_array($s)) {  
        ?>
            <div class="col-lg-4 col-md-6 special-grid drinks">
                <div class="card mb-3 h-100">
                    <img src="../admin/uploads/<?php echo $row['images']; ?>" class="img-fluid rounded-start" alt="<?php echo $row['tableno']; ?>" style="width: 100%; height: 150px;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['tabletype']; ?> Table</h5>
                        <p class="card-text"><?php echo $row['detail']; ?></p>
                        <p class="card-text">Capacity: <?php echo $row['capacity']; ?> person/table</p>
                        <p class="card-text">Price: <?php echo $row['price']; ?> /-</p>
                        <?php if (isset($_SESSION['username'])) { ?>
                            <a href="reservation.php?id=<?php echo $row['id']; ?>&username=<?php echo $_SESSION['username']; ?>&price=<?php echo $row['price']; ?>" class="btn ">Reserve</a>
                        <?php } else { ?>
                            <a href="login.php" class="btn ">Book Table</a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        <?php
            }
        } else {
            // Display a message if no items are available
            echo "<p style='text-align: center; color: red; font-size: 25px;'>No tables available for Outdoor Dinner.</p>";
        }
        ?>     
    </div>
</div>
<div class="tab-pane fade" id="v-pills-indoor" role="tabpanel" aria-labelledby="v-pills-indoor-tab">
    
    <div class="row">
        <?php
        $s = mysqli_query($con, "SELECT * FROM addtable WHERE tabletype ='Indoor'");
        // Check if any items are available
        if(mysqli_num_rows($s) > 0) {
            while($row = mysqli_fetch_array($s)) {  
        ?>
            <div class="col-lg-4 col-md-6 special-grid drinks">
                <div class="card mb-3 h-100">
                    <img src="../admin/uploads/<?php echo $row['images']; ?>" class="img-fluid rounded-start" alt="<?php echo $row['tableno']; ?>" style="width: 100%; height: 150px;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['tabletype']; ?> Table</h5>
                        <p class="card-text"><?php echo $row['detail']; ?></p>
                        <p class="card-text">Capacity: <?php echo $row['capacity']; ?> person/table</p>
                        <p class="card-text">Price: <?php echo $row['price']; ?> /-</p>
                        <?php if (isset($_SESSION['username'])) { ?>
                            <a href="reservation.php?id=<?php echo $row['id']; ?>&username=<?php echo $_SESSION['username']; ?>&price=<?php echo $row['price']; ?>" class="btn">Reserve</a>
                        <?php } else { ?>
                            <a href="login.php" class="btn">Book Table</a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        <?php
            }
        } else {
            // Display a message if no items are available
            echo "<p style='text-align: center; color: red; font-size: 25px;'>No tables available for Inddor Dinner.</p>";
        }
        ?>     
    </div>
</div>


                </div>
            </div>
        </div>
    </div>
</div>

<?php
// Close connection
$con->close();
include("footer.php");
?>