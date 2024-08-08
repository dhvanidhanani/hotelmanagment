<?php 
include "header.php"; 
include('../include/connection.php');
?>
<link rel="stylesheet" type="text/css" href="">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<style>
    /* CSS for double-line border effect */
    table {
        border-collapse: separate;
		border-spacing: 2px;
        width: 100%;
        border: 3px double black; /* Adjust the width and color of the border as needed */
    }
	.content table tr td,
    .content table tr th {
        padding: 10px;
        text-align: center;
    }
    th, td {
        padding: 8px;
        text-align: center;
        border: 1px solid black; /* Single line border for each cell */
    }

    tr:nth-child(even) {
        background-color: #f2f2f2; /* Light gray background for even rows */
    }

    th {
        background-color: #f2f2f2; /* Light gray background for header */
    }

    th:hover {
        background-color: #e0e0e0; /* Light gray background on hover */
    }

    .del {
        color: black;
        text-decoration: none;
    }

    .del:hover {
        color: black;
        text-decoration: none;
        text-shadow: 2px 3px 2px #FFFFFF;
    }

    .heading {
        text-align: center;
        font-weight: bold;
        color: black;
    }
</style>

<div class="content">
    <br><br>
    
    <table cellpadding="6" cellspacing="8">
        <tr>
            <td colspan=8><h1 class="heading">Parcel Client</h1></td>
        </tr>
        <tr>
            <th>Product ID</th>
            <th>User ID</th>
            <th>Customer Name</th>
            <th>Mobile</th>
            <th>Email</th>
            <th>Address</th>
            <th>View Product</th>
            <th>Delete</th>
        </tr>
        <?php
        $s = mysqli_query($con,"SELECT * FROM checkout");
        while($r = mysqli_fetch_array($s)) {
        ?>
        <tr>
            <td><?php echo $r['p_id']; ?></td>
            <td><?php echo $r['user_name']; ?></td>
            <td><?php echo $r['name']; ?></td>
            <td><?php echo $r['mobile']; ?></td>
            <td><?php echo $r['email']; ?></td>
            <td><?php echo $r['location']; ?></td>
            <td><a href="view_cart.php?pid=<?php echo $r['p_id']; ?>&username=<?php echo $r['user_name']; ?>"><i class='fa-solid fa-pen-to-square'></i></a></td>
            <td><a href="delete_cart.php?a=<?php echo $r['id'];?>" class="del" onclick="return confirm('Are you sure you want to delete this item?');"> <i class='fa-solid fa-trash'></i></a></td>
        </tr>
        <?php
        }
        ?>
    </table>
</div>