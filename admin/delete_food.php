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
// include "connect.php";

// Check if 'a' parameter is set
if(isset($_GET['a'])) {
    $id = $_GET['a'];

    // Delete item from menu table
    $delete_query = "DELETE FROM menu WHERE id='$id'";
    if(mysqli_query($con, $delete_query)) {
        // Redirect to view_food.php after successful deletion
        header("location: view_food.php");
        exit;
    } else {
        // Display error message if deletion fails
        echo "Error deleting record: " . mysqli_error($con);
    }
} else {
    // Display error message if 'a' parameter is not set
    echo "No item ID provided.";
}
?>



		
</div>
