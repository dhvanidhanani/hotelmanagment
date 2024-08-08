<?php
    include "header.php"; 
    include "../include/connection.php";
    ?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hotel Management</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylee.css">
    <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<style>
        
    .tbl_center {
        width: 80%; /* Adjust the width as needed */
        margin: 40px auto; /* Equal margin on all sides */
    }
    
    table { 
        /* Adjust the width as needed */
        width: 100%;
        border-collapse: collapse;
        border: 2px solid #ccc;
        margin-bottom: 20px;
    }
    th, td {
        padding: 10.8px;
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
        color: #d9534f; /* Red color for delete */
        text-decoration: none;
    }
    .del:hover {
        color: #a94442; /* Darker red color on hover */
    }
    .del i {
        vertical-align: middle;
    }
    .icon {
        color: black;
    }
    .del {
        color: black;
    }
</style>
<body>
    <div class="content"></div>
    <div class="tbl_center">
        <table>
            <tr>
                <th colspan="11" class="heading">Registrated User List</th>
            </tr>
            <tr class="bg-info"> 
                <th>User ID</th>
                <th>User Full Name</th>
                <th>User Name</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Mobile Number</th>
                <th>Email</th>
                <th>Address</th>
                <th>City</th>
                <th>State</th>
                <th>Remove</th>
            </tr> 
            <?php 
            $s = mysqli_query($con, "SELECT * FROM tbluser");
            while($r = mysqli_fetch_array($s)) {
            ?>
            <tr id="review_<?php echo $r['id']; ?>">
                <td><?php echo $r['id']; ?></td>
                <td><?php echo $r['full_name']; ?></td>
                <td><?php echo $r['username']; ?></td>
                <td><?php echo $r['age']; ?></td>
                <td><?php echo $r['gender']; ?></td>
                <td><?php echo $r['mno']; ?></td>
                <td><?php echo $r['email']; ?></td>
                <td><?php echo $r['address']; ?></td>
                <td><?php echo $r['city']; ?></td>
                <td><?php echo $r['state']; ?></td>
                <td><a href="#" class="del" onclick="deleteUser(<?php echo $r['id']; ?>)"> <i class='fa-solid fa-trash'></i></a></td>
            </tr>
            <?php 
            }
            ?> 
        </table> 
    </div>

<script>
function deleteUser(userId) {
    console.log("Deleting user with ID:", userId); // Check if the function is being called properly
    if (confirm('Are you sure you want to delete this user?')) {
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4) {
                console.log("Response from server:", xhr.responseText); // Log the server's response
                if (xhr.status == 200) {
                    var row = document.getElementById('review_' + userId);
                    if (row) {
                        row.parentNode.removeChild(row); // Remove the row from the table
                        console.log("User deleted successfully"); // Log success message
                    } else {
                        console.log("Failed to find row for user ID:", userId); // Log if row not found
                    }
                } else {
                    console.error("Failed to delete user. Server returned status:", xhr.status); // Log error status
                }
            }
        };
        xhr.open('GET', 'delete_user.php?id=' + userId, true);
        xhr.send();
    }
}
</script>
</body>
</html>