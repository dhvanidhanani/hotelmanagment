
<?php
include "header.php";
include "../include/connection.php";
?>
<style type="text/css">
	tr{
		font-size: 1.2em;
	}
	tr:hover{
		background-color: black;
		color: white;
	}
	th{
		color: tomato;
		font-size: 1.3em;
	}
	.del{
		color: red;
		text-decoration: none;
	}
	.del:hover{
		color: blue;
		text-decoration: none;
		text-shadow: 2px 3px 2px #FFFFFF;
	}

</style>
<div class="content">
	<?php
// Include your database connection file
include "connect.php";

// Check if the category ID is provided and not empty
if(isset($_GET['id']) && !empty($_GET['id'])) {
    // Sanitize the input to prevent SQL injection
    $category_id = mysqli_real_escape_string($con, $_GET['id']);

    // Perform deletion query
    $query = "DELETE FROM food_cat WHERE id = $category_id";
    $result = mysqli_query($con, $query);

    if($result) {
        // Redirect back to the page where the deletion was initiated
        echo "<script>window.open('view_foodcat.php','_self')</script>";
        exit(); // Stop executing the script after redirection
    } else {
        echo "Error deleting category: " . mysqli_error($con);
    }
} else {
    echo "Invalid category ID";
}
?>

</div>

