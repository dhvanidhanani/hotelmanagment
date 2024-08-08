<?php
session_start();
include('../include/connection.php');
include "header.php";

// Check if the username is set in the session
if(isset($_SESSION['username'])) {
    $username = $_SESSION['username']; // Set $username variable if session is set
} else {
    // If username is not set in the session, you can handle it according to your application logic
    // For example, redirect the user to the login page or display an error message
    // Here, I'll redirect the user to the login page
    header("Location: login.php");
    exit(); // Stop further execution
}

?>

<div style="height: 150px;"></div>
<div style="width: 80%; margin: 0 auto;">
    <div style="width: 50%; margin: 0 auto;">

        <form action="order.php" method="post">
            <table align="center" border="1" cellspacing="14" cellpadding="12" style="width: 100%">
                <tr>
                    <th> <h3 align="center" style="font-size: 1.3em;">Fill Up Details To Deliver Your Item</h3> </th>
                    <br>
                </tr>
                <tr align="center">
                    <td style="color: black">  Enter your name  <br>
                        <input type="text" name="nm" placeholder="Enter your name" style="width: 100%; padding: 10px; color: orange; " required="" pattern="[a-z,A-Z]*" > </td>   
                </tr>

                <tr align="center">
                    <td style="color: black">   Enter Mobile no <br>
                        <input type="no" name="mo" placeholder="Enter Mobile no" style="width: 100%; padding: 10px; color: orange; " required="" pattern="\d{10}"></td>
                </tr>

                <tr align="center">
                    <td style="color: black">   Enter Email address <br>
                        <input type="Email" name="em" placeholder="Enter email address" style="width: 100%; padding: 10px; color: orange; "> </td>   
                </tr>

                <tr align="center">
                    <td style="color: black"> Enter address <br>
                        <textarea name="ad" placeholder="Enter your address" style="width: 100%; padding: 10px; color: orange; "></textarea>
                    </td>
                </tr>
  
                <div>
                    <?php
                    // Assuming $con is your database connection
                    $s = mysqli_query($con, "SELECT addcart.price, addcart.qty, addcart.total, addcart.id, menu.image
                    FROM addcart
                    INNER JOIN menu ON addcart.p_id=menu.id where addcart.user_name='$username'");
                    ?>
                    <table border=1 width="100%" align="center" cellpadding="8" cellspacing="10" style="color: black">
                        <tr align="center">
                            <th>Image </th>
                            <th>Price</th>
                            <th>Qty</th>
                            <th>Total</th>
                            <th>Remove</th>
                        </tr>

                        <?php
                        $totalAmount = 0; // Initialize total amount
                        while ($r = mysqli_fetch_array($s)) {
                            $totalAmount += $r['total']; // Add each item total to total amount
                            ?>
                            <tr>
                                <td align="center"><img src="../admin/<?php echo $r['image']; ?>" width=100 height=100></td>
                                <td align="center"><?php echo $r['price']; ?></td>
                                <td align="center"><?php echo $r['qty']; ?></td>
                                <td align="center"><?php echo $r['total']; ?></td>
                                <td align="center"><a href="deletecart.php?id=<?php echo $r['id']; ?>">Delete</a></td>

                            </tr>
                        <?php
                        }
                        ?>
                        <tr>
                            <td colspan="3" align="center"><b>Total Amount:</b></td>
                            <td><?php echo $totalAmount; ?></td>
                            <td></td>
                        </tr>
                    </table>

                    <!-- Display the "Confirm Order" button if cart is not empty -->
                    <?php
                    // Check if the cart is empty
                    $cartIsEmpty = true; // Assume cart is empty initially
                    $cartQuery = mysqli_query($con, "SELECT * FROM addcart WHERE user_name='$username'");
                    if(mysqli_num_rows($cartQuery) > 0) {
                        $cartIsEmpty = false; // Cart is not empty
                    }
                    ?>
                    <?php if(!$cartIsEmpty): ?>
                        <tr align="center">
                            <td colspan="4" > 
                                <input type="submit" name="s" value="Confirm Order" style="height: 50px; background-color:lightgreen; color: black; padding: 10px; width: 100%;"> 
                            </td>   
                        </tr>
                    <?php endif; ?>
                </table>   
            </form>
            <br> <br>
        </div>
    </div>
<br><br>
    <?php
    include "footer.php";
    ?>
