<?php 
session_start();
if(isset($_SESSION['adminid']))
{
    include "header.php"; 
?>
<link rel="stylesheet" type="text/css" href="style.css">

<!-- Apply background image directly to the div -->
<div style="background-image: url('../images/WhatsApp Image 2024-03-12 at 1.05.10 PM.jpeg'); background-repeat: no-repeat; background-size: cover; background-position: center; background-color: white; width: 98%; margin: 0 auto;">
    <br>
    <?php
    include "../include/connection.php";
    $pid = $_GET['pid'];
    $username = $_GET['username'];
    ?>

    <style>
        /* Rest of your CSS styles */
        table,tr,th,td {
            width:50%;
            margin:auto;
            font-size:20px;
            padding:10px;
            text-align:center;
            border:2px solid;
            border-collapse:collapse;
        }
    </style>

    <body>
        <table border="1" align="center" width="90%" cellspacing="10" cellpadding="12">
            <tr>
                <th>NO</th>
                <th>UserID</th>
                <th>Product ID</th>
                <th>Product name</th>
                <th>Price</th>
                <th>Qty</th>
                <th>Total</th>
                <th>IMAGE</th>    
            </tr>
            <?php 
            // $s = mysqli_query($con,"SELECT * FROM addcart INNER JOIN menu ON addcart.p_id = menu.id INNER JOIN checkout ON addcart.user_name = checkout.user_name;");

            $s = mysqli_query($con,"SELECT addcart.price, addcart.p_id, addcart.qty, addcart.total,addcart.id, checkout.name, addcart.user_name, menu.image, menu.sub_cat
FROM addcart
INNER JOIN checkout ON addcart.p_id=checkout.p_id INNER JOIN menu on menu.id=checkout.p_id  where addcart.user_name='$username' and checkout.p_id='$pid'");


            while($r = mysqli_fetch_array($s))
            {
            ?>
            <tr>
                    <td><?php echo $r['id']; ?></td>
                    <td><?php echo $r['user_name']; ?></td>
                    <td><?php echo $r['p_id']; ?></td>
                    <td><?php echo $r['sub_cat']; ?></td>
                    <td><?php echo $r['price']; ?></td>
                    <td><?php echo $r['qty']; ?></td>
                    <td><?php echo $r['total']; ?></td>
                    <td><img src="<?php echo $r['image']; ?>" width="100" height="100"></td>
            </tr>
            <?php
                }
            ?>
        </table>
    </body>
</div>

<?php
}
else
{
     header("location:index.php");
}
?>
