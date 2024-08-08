<?php
include("header.php");
?>

<style>
    .tbl {
        border-collapse: collapse;
        width: 50%;
        height: 80%;
        padding: 50px;
        margin-left:200px;
        margin-top:100px;
    }

    .tbl th, .tbl td {
        border: 1px solid #ddd;
        padding: 12px;
        text-align: left;
    }

    .tbl th {
        background-color: #f2f2f2;
        font-weight: bold;
    }

    .tbl tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    .tbl tr:hover {
        background-color: #f2f2f2;
    }

    .tbl a {
        text-decoration: none;
        color: #333;
    }
    
    .view-icon {
        color: #007bff;
    }

    .view-icon:hover {
        cursor: pointer;
    }
</style>

<?php
require("../include/connection.php");

// Fetch all data from the checkout table
$qu1 = "SELECT * FROM checkout";
$resu = mysqli_query($con, $qu1);

// Create an array to store checkout records
$checkoutRecords = array();

while ($row = mysqli_fetch_assoc($resu)) {
    $checkoutRecords[] = $row;
}

// Create an array to store the count of orders for each user
$userOrdersCount = array();

// Count the orders for each user
foreach ($checkoutRecords as $checkoutRecord) {
    $user_name = $checkoutRecord['user_name'];
    
    // If the user's name is not already in the array, initialize the count to 1
    if (!isset($userOrdersCount[$user_name])) {
        $userOrdersCount[$user_name] = 1;
    } else {
        // If the user's name is already in the array, increment the count
        $userOrdersCount[$user_name]++;
    }
}


// Display the count of orders for each user
echo "<table class='tbl'>
        <tr>
            <th>User Name</th>
            <th>Number of Orders</th>
            <th>View</th>
        </tr>";

foreach ($userOrdersCount as $user_name => $orderCount) {
    // Generate clickable links for each user's name
    echo "<tr>
            <td><a href='user_orders.php?user_name=" . urlencode($user_name) . "'>$user_name</a></td>
            <td>$orderCount</td>
            <td><a href='user_orders.php?user_name=" . urlencode($user_name) . "' class='view-icon'><i class='fas fa-eye'></i></a></td>
          </tr>";
}

echo "</table>";
?>
