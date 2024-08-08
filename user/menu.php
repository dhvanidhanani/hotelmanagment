<?php
session_start();
include('../include/connection.php');
include "header.php";
?>
<style>
    .special-grid img {
        height: 200px; /* Set the fixed height */
        width: 263px; /* Set the fixed width */
    }

    .custom-image {
        height: 200px;
        width: 263px;
    }
</style>

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
                    <a class="nav-link <?php if (!isset($_GET['categories'])) echo 'active'; ?>" id="v-pills-all-tab" data-toggle="pill" href="#v-pills-all" role="tab" aria-controls="v-pills-all" aria-selected="true">All</a>
                    <?php
                    // Fetch categories from the database
                    $select_categories = "SELECT * FROM `categories`";
                    $result = mysqli_query($con, $select_categories);
                    while ($row_data = mysqli_fetch_assoc($result)) {
                        $category_title = $row_data['categories_title'];
                        $categories_id = $row_data['categories_id'];
                        $active_class = (isset($_GET['categories']) && $_GET['categories'] == $categories_id) ? 'active' : '';
                        echo "<a href='menu.php?categories=$categories_id' class='nav-link $active_class' role='tab'>$category_title</a>";
                    }
                    ?>
                </div>
            </div>

            <div class="col-9">
                <div class="tab-content" id="v-pills-tabContent">
                    <!-- Display menu items based on selected category -->
                    <div class="tab-pane fade <?php if (!isset($_GET['categories'])) echo 'show active'; ?>" id="v-pills-all" role="tabpanel" aria-labelledby="v-pills-all-tab">
                        <div class="row">
                            <?php
                            // Fetch all menu items from the database
                            $query_all = "SELECT * FROM menu order by rand() LIMIT 0,30";
                            // $query_all = "SELECT * FROM menu";
                            $result_all = mysqli_query($con, $query_all);

                            // Iterate through fetched menu items and display them
                            while ($row_all = mysqli_fetch_assoc($result_all)) {
                                // Display each menu item
                                ?>
                                <div class="col-lg-4 col-md-6 special-grid drinks">
                                    <div class="gallery-single fix">
                                        <img src="../admin/<?php echo $row_all['image']; ?>" class="img-fluid custom-image" alt="Image">
                                        <div class="why-text">
                                            <h4><?php echo $row_all['title']; ?></h4>
                                            <p><?php echo $row_all['description']; ?></p>
                                            <p>Rs <?php echo $row_all['price']; ?> /-</p>
                                            <h5 align='center'>
                                                <?php
                                                // Check if the user is logged in
                                                if (isset($_SESSION['username'])) {
                                                    // User is logged in, display the "Add to Cart" button with appropriate link
                                                    echo "<a href='addcart.php?pid={$row_all['id']}&username={$_SESSION['username']}&price={$row_all['price']}'>Add Cart</a>";
                                                } else {
                                                    // User is not logged in, display a disabled "Add to Cart" button with login link
                                                    echo "<button disabled>Add to Cart</button>";
                                                    echo "<p>Please <a href='login.php'>login</a> to add items to your cart.</p>";
                                                }
                                                ?>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div class="tab-pane fade <?php if (isset($_GET['categories'])) echo 'show active'; ?>" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <div class="row">
                            <?php
                            // Check if the category ID is provided in the URL
                            if (isset($_GET['categories'])) {
                                // Fetch menu items based on the selected category
                                $categories_id = $_GET['categories'];
                                $query_cat = "SELECT * FROM menu WHERE categories_id = $categories_id";
                                $result_cat = mysqli_query($con, $query_cat);

                                // Iterate through fetched menu items and display them
                                while ($row_cat = mysqli_fetch_assoc($result_cat)) {
                                    // Display each menu item
                                    ?>
                                    <div class="col-lg-4 col-md-6 special-grid drinks">
                                        <div class="gallery-single fix">
                                            <img src="../admin/<?php echo $row_cat['image']; ?>" class="img-fluid custom-image" alt="Image">
                                            <div class="why-text">
                                                <h4><?php echo $row_cat['title']; ?></h4>
                                                <p><?php echo $row_cat['description']; ?></p>
                                                <p>Rs <?php echo $row_cat['price']; ?> /-</p>
                                                <h5 align="center">
                                                    <?php
                                                    // Check if the user is logged in
                                                    if (isset($_SESSION['username'])) {
                                                        // User is logged in, display the "Add to Cart" button with appropriate link
                                                        echo "<a href='addcart.php?pid={$row_cat['id']}&username={$_SESSION['username']}&price={$row_cat['price']}'>Add Cart</a>";
                                                    } else {
                                                        // User is not logged in, display a disabled "Add to Cart" button with login link
                                                        echo "<button disabled>Add to Cart</button>";
                                                        echo "<p>Please <a href='login.php'>login</a> to add items to your cart.</p>";
                                                    }
                                                    ?>
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
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
