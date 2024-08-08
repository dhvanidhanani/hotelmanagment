<?php
include("header.php");
?>

<style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0; /* Reset default margin */
    }

    .content {
        width: 100%;
        /* margin-bottam: 40px;  */
    }

    .tbl {
        border-collapse: collapse;
        margin: 0 auto; /* Center the table horizontally */
    }

    .tbl th, .tbl td {
        border: 1px solid #ddd;
        padding: 10px;
        text-align: center;
    }

    .tbl th {
        background-color: #f2f2f2;
    }

    .product-image {
        width: 80px;
        height: auto;
    }
</style>

<?php
require("../include/connection.php");

// Check if the user_name parameter is set in the URL
if (isset($_GET['user_name'])) {
    $user_name = $_GET['user_name'];

    // Fetch detailed order information for the selected user
    $query = "SELECT * FROM checkout WHERE user_name = '" . mysqli_real_escape_string($con, $user_name) . "'";
    $result = mysqli_query($con, $query);

    // Display the detailed order information in a table
    echo "<div class='content'>";
    echo "<h3 style='text-align: center; margin-top: 0;'>Orders for User: $user_name</h3>";

    echo "<table class='tbl'>
            <tr>
                <th>No.</th> <!-- Counter column added -->
                <th>Product ID</th>
                <th>Name</th>
                <th>Mobile</th>
                <th>Email</th>
                <th>Location</th>
                <th>Date and Time</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
                <th>Image</th>
            </tr>";

    $counter = 1; // Initialize the counter variable
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>{$counter}</td> <!-- Display the counter variable -->
                <td>{$row['p_id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['mobile']}</td>
                <td>{$row['email']}</td>
                <td>{$row['location']}</td>
                <td>{$row['dateandtime']}</td>
                <td>{$row['price']}</td>
                <td>{$row['qty']}</td>
                <td>{$row['total']}</td>
                <td><img src='../admin/{$row['image']}' class='product-image'></td>
              </tr>";
        $counter++; // Increment the counter
    }

    echo "</table>";
    echo "</div>";
} else {
    // If user_name parameter is not set, display an error message or handle it according to your requirements
    echo "<p style='text-align: center; margin-top: 30px;'>Error: User name not provided.</p>";
}

include("footer.php");
?>
