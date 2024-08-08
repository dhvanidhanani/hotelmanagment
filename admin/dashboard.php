<!-- <!DOCTYPE html>
<html lang="en">

<head>
<title>restaurnt Management</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap-4.3.1-dist\css\bootstrap.min">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        *{
            margin: 0;
            padding: 20px;
            box-sizing: border-box;
        }
    </style>
    <?php //include_once 'bootstrap.php' ;
        // include("header.php"); 
        ?>
</head>

<body style="background-image: url('../images/WhatsApp Image 2024-03-12 at 1.05.10 PM.jpeg'); background-repeat: no-repeat; background-size: cover; background-position: center; background-color: white; width: 98%; margin: 0 auto;">
    <section id="home">
        <div style="background:rgba(255 255 255 / 50%); width:100%; height:100px; margin:auto;margin-top:200px;margin-left:300px; ">
            <h1 style="color:black; text-align:center; font-size:40px; padding-top:20px;font-weight:bold; ">Welcome Admin</h1>

        </div>
    </section>
    

     
</body>

</html> -->

<?php
// welcome.php

// Start the session
session_start();

// Check if the user is logged in
if (isset($_SESSION['adminid'])) {
    // Get admin ID from session
    $adminid = $_SESSION['adminid'];

    // Display welcome message with admin ID
    echo "Welcome Admin $adminid";
} else {
    // If user is not logged in, redirect to the login page
    header("Location: login.php");
    exit();
}
?>

