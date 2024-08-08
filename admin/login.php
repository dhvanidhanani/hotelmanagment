<?php
// Start session
session_start();

// Include database connection file
include_once '../include/connection.php';

// Check if form is submitted
if(isset($_POST['s'])) {
    // Get adminid and password from form
    $adminid = $_POST['aid'];
    $password = $_POST['pass'];

    // Perform query to check admin credentials
    $sql = "SELECT * FROM aadmin WHERE adminid = '$adminid' AND password = '$password'";
    $result = $con->query($sql);

    // Check if there's a matching admin record
    if ($result->num_rows > 0) {
        // Admin authentication successful
        $_SESSION['adminid'] = $adminid; // Store admin ID in session
        header("Location: wel_add.php"); // Redirect to welcome page
        exit();
    } else {
        // Admin authentication failed
        header("Location: index.php?error=1"); // Redirect back to index.php with error code
        exit();
    }
}
?>
