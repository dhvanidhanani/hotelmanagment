 <?php
// include "header.php"; 
// include "../include/connection.php";

// function getMenuItems() {
//     global $con;
//     $query = mysqli_query($con, "SELECT * FROM menu");
//     return $query;
// }

// $result = getMenuItems(); 

// if(isset($_GET['a'])) {
//     $itemId = $_GET['a'];
//     mysqli_query($con, "DELETE FROM menu WHERE id='$itemId'");
    
// }
?>
<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hotel Management</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylee.css">
    <link rel="stylesheet" href="bootstrap-4.3.1-dist\css\bootstrap.min">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    
</head>
<style>
    .tbl_center {
        width: 100%;
        margin: 80px auto;
        margin-left:150px;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        border: 2px solid #ccc;
        margin-bottom: 20px;
    }
    th, td {
        padding: 12px;
        text-align: center;
        border: 1px solid #ddd;
    }
    th {
        background-color: #f2f2f2;
        font-weight: bold;
    }
    tr:nth-child(even) {
        background-color: #f9f9f9;
    }
    .heading {
        text-align: center;
        color: #333;
        font-size: 24px;
        padding: 20px;
    }
    .btn {
        display: inline-block;
        padding: 8px 16px;
        background-color: #007bff;
        color: #fff;
        text-decoration: none;
        border-radius: 4px;
    }
    .btn:hover {
        background-color: #0056b3;
    }
    .del {
        color: #d9534f; 
        text-decoration: none;
    }
    .del:hover {
        color: #a94442; 
    }
    .del i {
        vertical-align: middle;
    }
</style>
<body>
    <div class="content"></div>
    <form method="post" action="dispfood.php">
        <div class="tbl_center">
            <table>
                <tr>
                            <th colspan="6" class="heading">View Food</th>
                            <th><a href="food.php" class="icon"><i class="fas fa-plus"></i></a></th>
                        </tr>
                <tr class="bg-info"> 
                    <th>CATEGORY</th>
                    <th>FOOD ITEM</th>
                    <th>TITLE</th>
                    <th>DESCRIPTION</th>
                    <th>PRICE</th>
                    <th>IMAGE</th>
                    <th>REMOVE</th>
                </tr> 
                <?php
                // if (isset($result) && $result && $result->num_rows > 0) {
                //     while ($row = $result->fetch_assoc()) {
                ?>
                        <tr>
                            <td><?php 
                            // echo $row['categories_id']; 
                            ?></td>
                            <td><?php 
                            // echo $row['sub_cat']; 
                            ?></td>
                            <td><?php 
                            // echo $row['title']; 
                            ?></td>
                            <td><?php 
                            // echo $row['description'];
                             ?></td>
                            <td><?php 
                            // echo $row['price']; 
                            ?></td>
                            <td><img src="<?php
                            //  echo $row['image']; 
                             ?>" width="70" height="70"></td>
                            <td><a href="#" class="del" onclick="confirmDelete(<?php 
                            // echo $row['id']; 
                            ?>);"><i class='fa-solid fa-trash'></i></a></td>
                        </tr>
                <?php 
                //     }
                // } else {
                //     echo "<tr><td colspan='6'>No menu items found</td></tr>";
                // }
                ?> 
            </table> 
        </div>
    </form>

    <script>
        function confirmDelete(itemId) {
            if (confirm('Are you sure you want to delete this item?')) {
                var xhr = new XMLHttpRequest();
                xhr.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        location.reload();
                    }
                };
                xhr.open("GET", "delete_food.php?a=" + itemId, true);
                xhr.send();
            }
        }
    </script>
</body>
</html> -->


<?php
include "header.php"; 
include "../include/connection.php";

function getMenuItems() {
    global $con;
    $query = mysqli_query($con, "SELECT menu.*, categories.categories_title 
                                  FROM menu 
                                  INNER JOIN categories ON menu.categories_id = categories.categories_id");
    return $query;
}

$result = getMenuItems(); // Fetch menu items

if(isset($_GET['a'])) {
    $itemId = $_GET['a'];
    mysqli_query($con, "DELETE FROM menu WHERE id='$itemId'");
    // No need for header redirection
    // exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hotel Management</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylee.css">
    <link rel="stylesheet" href="bootstrap-4.3.1-dist\css\bootstrap.min">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    
</head>
<style>
    /* .tbl_center {
        width: 100%;
        margin: 80px auto;
        margin-left:150px;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        border: 2px solid #ccc;
        margin-bottom: 20px;
    } */
    .tbl_center {
        width: 80%;
        margin: 80px auto;
        /* Remove margin-left */
    }
    
    table { 
        /* Adjust the width as needed */
        width: 100%;
        border-collapse: collapse;
        border: 2px solid #ccc;
        margin-bottom: 20px;
    }
    th, td {
        padding: 12px;
        text-align: center;
        border: 1px solid #ddd;
    }
    th {
        background-color: #f2f2f2;
        font-weight: bold;
    }
    tr:nth-child(even) {
        background-color: #f9f9f9;
    }
    .heading {
        text-align: center;
        color: #333;
        font-size: 24px;
        padding: 20px;
    }
    .btn {
        display: inline-block;
        padding: 8px 16px;
        background-color: #007bff;
        color: #fff;
        text-decoration: none;
        border-radius: 4px;
    }
    .btn:hover {
        background-color: #0056b3;
    }
    .del {
        color: black; /* Red color for delete */
        text-decoration: none;
    }
    .del:hover {
        color: #a94442; /* Darker red color on hover */
    }
    .del i {
        vertical-align: middle;
    }
    .icon{
        color:black;
    }
</style>
<body>
    <div class="content"></div>
    <form method="post" action="dispfood.php">
        <div class="tbl_center">
            <table>
                <tr>
                    <th colspan="7" class="heading">View Food</th>
                    <th><a href="food.php" class="icon"><i class="fas fa-plus"></i></a></th>
                </tr>
                <tr class="bg-info"> 
                    <th>ITEM NO</th> <!-- Added this header -->
                    <th>CATEGORY</th>
                    <th>FOOD ITEM</th>
                    <th>TITLE</th>
                    <th>DESCRIPTION</th>
                    <th>PRICE</th>
                    <th>IMAGE</th>
                    <th>REMOVE</th>
                </tr> 
                <?php
                $counter = 1; // Initialize the counter variable
                if (isset($result) && $result && $result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                ?>
                        <tr>
                            <td><?php echo $counter++; ?></td> <!-- Display the counter variable -->
                            <td><?php echo $row['categories_title']; ?></td>
                            <td><?php echo $row['sub_cat']; ?></td>
                            <td><?php echo $row['title']; ?></td>
                            <td><?php echo $row['description']; ?></td>
                            <td><?php echo $row['price']; ?></td>
                            <td><img src="<?php echo $row['image']; ?>" width="70" height="70"></td>
                            <td><a href="#" class="del" onclick="confirmDelete(<?php echo $row['id']; ?>);"><i class='fa-solid fa-trash'></i></a></td>
                        </tr>
                <?php 
                    }
                } else {
                    echo "<tr><td colspan='7'>No menu items found</td></tr>";
                }
                ?> 
            </table> 
        </div>
    </form>

    <script>
        function confirmDelete(itemId) {
            if (confirm('Are you sure you want to delete this item?')) {
                // AJAX call to delete_food.php to delete the item without page reload
                var xhr = new XMLHttpRequest();
                xhr.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        // Reload the current page after deletion
                        location.reload();
                    }
                };
                xhr.open("GET", "delete_food.php?a=" + itemId, true);
                xhr.send();
            }
        }
    </script>
</body>
</html>
