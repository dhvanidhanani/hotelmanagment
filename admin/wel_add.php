<?php
session_start();
include("header.php");
include("connect.php"); // Include your database connection file

// Check if admin ID is set in session
if (isset($_SESSION['adminid'])) {
    $adminid = $_SESSION['adminid'];
    
    // Query to fetch admin details based on admin ID
    $query = "SELECT adminname FROM aadmin WHERE adminid = '$adminid'";
    $result = mysqli_query($con, $query);
    
    // Check if the query executed successfully
    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $adminname = $row['adminname'];
    } else {
        echo "Error fetching admin details: " . mysqli_error($con);
    }
} else {
    // Admin not logged in, redirect to login page
    header("Location: index.php");
    exit();
}

// Get count of menus
$menuCountQuery = "SELECT COUNT(*) AS menu_count FROM menu";
$menuCountResult = mysqli_query($con, $menuCountQuery);
$menuCount = mysqli_fetch_assoc($menuCountResult)['menu_count'];

// Get count of pending orders
$totalOrdersQuery = "SELECT COUNT(*) AS total_orders FROM checkout";
$totalOrdersResult = mysqli_query($con, $totalOrdersQuery);
$totalOrdersCount = mysqli_fetch_assoc($totalOrdersResult)['total_orders'];


// Get count of registered users
$registeredUsersQuery = "SELECT COUNT(*) AS user_count FROM tbluser";
$registeredUsersResult = mysqli_query($con, $registeredUsersQuery);
$registeredUsersCount = mysqli_fetch_assoc($registeredUsersResult)['user_count'];

// Get count of booked tables
$tablesQuery = "SELECT COUNT(*) AS total_tables FROM addtable";
$tablesResult = mysqli_query($con, $tablesQuery);
$tablesCount = mysqli_fetch_assoc($tablesResult)['total_tables'];


// Get count of reservations
$reservationsQuery = "SELECT COUNT(*) AS reservations FROM reservation";
$reservationsResult = mysqli_query($con, $reservationsQuery);
$reservationsCount = mysqli_fetch_assoc($reservationsResult)['reservations'];

// Get count of Review
$reviewsQuery = "SELECT COUNT(*) AS total_reviews FROM review";
$reviewsResult = mysqli_query($con, $reviewsQuery);
$reviewsCount = mysqli_fetch_assoc($reviewsResult)['total_reviews'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        .container {
            margin-top: 50px;
        }

        .card {
            padding: 20px;
            text-align: center;
            background-color: #f2f2f2; 
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .card-title {
            /* font-size: 24px; */
            margin-bottom: 20px;
            font-weight: bold;
    font-size: 20px;
            
        }

        .card-text {
            font-size: 30px;
            font-style: italic;
        }

        .card:hover {
    background-color: #f8f9fa; /* New background color */
    transition: background-color 0.3s ease; /* Transition effect */
}
    </style>
</head>

<body>
    <div class="container">
 <!-- Display welcome message with admin name -->
 <div style="text-align: center; margin-bottom: 40px;">
        <h2>Welcome Admin: <?php echo $adminname; ?></h2>
    </div>

        <div class="row">
            <div class="col-md-4">
            <a href="view_food.php" style="text-decoration: none; color: inherit;">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Menu Count</h5>
                        <p class="card-text"><?php echo $menuCount; ?></p>
                    </div>
                </div>
            </a>
            </div>
            
            <!-- Add the code to display total pending orders for each user -->
            <!-- <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Total Pending Orders by User</h5>
                        <ul class="list-unstyled"> -->
                            <?php
                            // if ($pendingOrdersResult) {
                            //     while ($row = mysqli_fetch_assoc($pendingOrdersResult)) {
                            //         echo "<li>{$row['user_name']}: {$row['pending_orders']}</li>";
                            //     }
                            // } else {
                            //     echo "<li>No pending orders found</li>";
                            // }
                            ?>
                        <!-- </ul>
                    </div>
                </div>
            </div> -->

            <div class="col-md-4">
            <a href="vieworder.php" style="text-decoration: none; color: inherit;">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Total Orders</h5>
            <p class="card-text"><?php echo $totalOrdersCount; ?></p>
        </div>
    </div>
    </a>
</div>
            <div class="col-md-4">
            <a href="manage_customer.php" style="text-decoration: none; color: inherit;">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Registered Users</h5>
                        <p class="card-text"><?php echo $registeredUsersCount; ?></p>
                    </div>
                </div>
            </a>
            </div>  
            <div class="col-md-4">
    <div class="card">
    <a href="view_table.php" style="text-decoration: none; color: inherit;">
        <div class="card-body">
            <h5 class="card-title">Total Tables</h5>
            <p class="card-text"><?php echo $tablesCount; ?></p>
        </div>
    </div>
    </a>
</div>

            
            <div class="col-md-4">
            <a href="viewtablebook.php" style="text-decoration: none; color: inherit;">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Total Reservations</h5>
                        <p class="card-text"><?php echo $reservationsCount; ?></p>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-md-4">
    <a href="review.php" style="text-decoration: none; color: inherit;">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Total Reviews</h5>
                <p class="card-text"><?php echo $reviewsCount; ?></p>
            </div>
        </div>
    </a>
</div>

        </div>
    </div>
</body>

</html>
