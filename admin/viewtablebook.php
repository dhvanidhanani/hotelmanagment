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
    <link rel="stylesheet" href="bootstrap-4.3.1-dist\css\bootstrap.min">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    
</head>
<style>

    .tbl_center {
        width: 80%; /* Adjust the width as needed */
        margin: 40px auto; /* Equal margin on all sides */
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


    .del{
        color:black;
    }
</style>
<body>
    <div class="content"></div>
    <form method="post" action="dispfood.php">
        <div class="tbl_center">
            <table>
                <tr>
                    
                    <th colspan="11" class="heading">User's Book Table</th>
                    <!-- <th><a href="food.php" class="icon"><i class="fas fa-plus"></i></a></th> -->
                </tr>
                <tr class="bg-info"> 
                <th>No.</th> <!-- Counter column -->
                    <th>Table ID</th>
                    <th>Table Type</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Contact No</th>
                    <th>No Of Persons</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Images</th>
                    <th>Remove</th>
                </tr> 
                <?php 
                $counter = 1; // Initialize counter variable
                $s = mysqli_query($con,"SELECT * FROM reservation JOIN addtable a ON reservation.table_id = a.id;");
                while($r = mysqli_fetch_array($s)) {
                ?>
                <tr id="review_<?php echo $r['id']; ?>">
                    <td><?php echo $counter++; ?></td> <!-- Counter column -->
                    <td><?php echo $r['table_id']; ?></td>
                    <td><?php echo $r['tabletype']; ?></td>
                    <td><?php echo $r['name']; ?></td>
                    <td><?php echo $r['email']; ?></td>
                    <td><?php echo $r['phone']; ?></td>
                    <td><?php echo $r['num_persons']; ?></td>
                    <td><?php echo $r['reservation_date']; ?></td>
                    <td><?php echo $r['reservation_time']; ?></td>
                    <td><img src="uploads/<?php echo $r['images']; ?>" alt="Table Image" width="100"></td>
                    <td><a href="#" class="del" onclick="deleteReview(<?php echo $r['id']; ?>)"> <i class='fa-solid fa-trash'></i></a></td>
                </tr>
                <?php 
                }
                ?> 
            </table> 
        </div>
    </form>

   
<script>
function deleteReview(reviewId) {
    if (confirm('Are you sure you want to delete this review?')) {
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                var row = document.getElementById('review_' + reviewId);
                if (row) {
                    row.parentNode.removeChild(row);
                }
            }
        };
        xhr.open('GET', 'delete_review.php?a=' + reviewId, true);
        xhr.send();
    }
}
</script>
</body>

</html>