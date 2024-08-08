<?php
session_start();
include('../include/connection.php');
include "header.php";
?>
<div style="height: 140px;"></div>
<div style="width: 90%; margin: 0 auto; background-color: #E8E8E8; padding: 50px;">


<?php
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

// Check if the form is submitted
if(isset($_POST['s'])) {
    // Retrieve form data
    $nm = $_POST['nm'];
    $mo = $_POST['mo'];
    $em = $_POST['em'];
    $ad = $_POST['ad'];

    // Insert data into checkout table
    // $insert_query = "INSERT INTO `checkout` (`p_id`, `user_name`, `name`, `mobile`, `email`, `location`, `price`, `qty`, `total`, `image`) 
    //                 SELECT addcart.p_id, addcart.user_name, '$nm', '$mo', '$em', '$ad', addcart.price, addcart.qty, addcart.total, menu.image
    //                 FROM addcart
    //                 INNER JOIN menu ON addcart.p_id=menu.id 
    //                 WHERE addcart.user_name='$username'";

$insert_query = "INSERT INTO `checkout` (`p_id`, `user_name`, `name`, `mobile`, `email`, `location`, `price`, `qty`, `total`, `image`, `status`) 
SELECT addcart.p_id, addcart.user_name, '$nm', '$mo', '$em', '$ad', addcart.price, addcart.qty, addcart.total, menu.image, 'Pending'
FROM addcart
INNER JOIN menu ON addcart.p_id=menu.id 
WHERE addcart.user_name='$username'";

    
    // Execute the insert query
    $insert_result = mysqli_query($con, $insert_query);

    if($insert_result) {
        // If data is successfully inserted, clear the cart
        mysqli_query($con, "DELETE FROM addcart WHERE user_name='$username'");
?>
<div style="background-color: #3b0878; color: #b7e352; padding: 20px; text-align: center; font-size: 24px;">
    <p>Your order has been successfully placed!</p>
</div>
<div style="background-color: #f9f9f9; color: #333; padding: 10px; text-align: center; font-size: 18px;">
    For more details, feel free to contact us 24x7 at <br>
    <span style="color: #3b0878; font-weight: bold;">+91 98765 43210</span>
</div>


<?php
    } else {
        // If there's an error in inserting data, display an error message
?>
<div style="background-color: pink; color: black; padding: 20px; font-size: 2.1em;">Error: Failed to place order. Please try again.</div>
<?php
    }
} else {
    // If form is not submitted, display a message or redirect the user
    header("Location: checkout.php");
    exit();
}
?>
</div>
<br><br>
<?php
include "footer.php";
?>
