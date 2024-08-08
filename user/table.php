<?php
session_start();
include('../include/connection.php');
include "header.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div style="height: 140px;"></div>
<div style="width: 90%; margin: 0 auto; background-color: #E8E8E8; padding: 50px;">
<div style="background-color: #3b0878; color: #b7e352; padding: 20px; text-align: center; font-size: 24px;">
    <p>Your table reservation has been confirmed!</p>
</div>
<div style="background-color: #f9f9f9; color: #333; padding: 10px; text-align: center; font-size: 18px;">
    Thank you for choosing our restaurant. Your table is now reserved for your selected date and time.<br>
    If you have any questions or need assistance, feel free to contact us 24x7 at <br>
    <span style="color: #3b0878; font-weight: bold;">+91 98765 43210</span>
</div>

</div>
</body>
</html>




<br><br>
<?php include "footer.php"; ?>    