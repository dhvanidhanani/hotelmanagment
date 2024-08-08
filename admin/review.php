<?php
    include('header.php');
?>
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


<?php
include("../include/connection.php");
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
        margin: 40px auto;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        border: 1px solid #ccc;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    th, td {
        padding: 12px;
        text-align: center;
        border: 1px solid #ccc;
    }
    th {
        background-color: #f2f2f2;
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
    .icon {
        margin-left: 20px;
        color: #666;
    }
    .icon:hover {
        color: #333;
    }
    .del{
        color:black;
    }
</style>

<body>
    <div class="tbl_center">
        <form method="post" action="dispfood.php">
            <div class="table-responsive">
                <table class="table">
                <thead>
                        <tr>
                            <th colspan="6" class="heading" style=" background-color: #f2f2f2;">View User's Reviews</th>
                         <!-- <th><a href="food_cart.php" class="icon"><i class="fas fa-plus"></i></a></th> -->
                        </tr>
                        <tr class="bg-info"> 
                        <th style=" background-color: #f2f2f2;">ID</th>
                        <th style=" background-color: #f2f2f2;">Name</th>
                        <th style=" background-color: #f2f2f2;">Review</th>
                        <th style=" background-color: #f2f2f2;">Comments</th>
                        <th style=" background-color: #f2f2f2;">Remove</th>
                        </tr> 
                    </thead>
                    <tbody>
                    <?php 
        $s = mysqli_query($con, "SELECT * FROM review");
        while($r = mysqli_fetch_array($s)) {
        ?>
                            <tr id="review_<?php echo $r['id']; ?>" align=center>
                <td><?php echo $r['id']; ?></td>
                <td><?php echo $r['name']; ?></td>
                <td><?php echo $r['review']; ?></td>
                <td><?php echo $r['description']; ?></td>
                <td><a href="#" class="del" onclick="deleteReview(<?php echo $r['id']; ?>)"> <i class='fa-solid fa-trash'></i></a></td>

            </tr>
                        <?php 
                            }
                        ?> 
                    </tbody>
                </table> 
            </div>
        </form>
    </div>
</body>
</html>