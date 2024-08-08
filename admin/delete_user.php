<?php
// Include database connection
include "../include/connection.php";

// Check if user ID is provided via GET request
if(isset($_GET['id'])) {
    // Sanitize user ID to prevent SQL injection
    $userId = mysqli_real_escape_string($con, $_GET['id']);

    // SQL query to delete user with the provided ID
    $deleteQuery = "DELETE FROM tbluser WHERE id = '$userId'";

    // Execute the delete query
    if(mysqli_query($con, $deleteQuery)) {
        // User deleted successfully
        echo "User deleted successfully";
        // You can also send a specific HTTP status code if needed (e.g., 200 OK)
        // http_response_code(200);
    } else {
        // Failed to delete user
        echo "Error: " . mysqli_error($con);
        // You can send an appropriate HTTP status code for errors (e.g., 500 Internal Server Error)
        // http_response_code(500);
    }
} else {
    // No user ID provided
    echo "Error: No user ID provided";
    // You can send an appropriate HTTP status code (e.g., 400 Bad Request)
    // http_response_code(400);
}
?>
