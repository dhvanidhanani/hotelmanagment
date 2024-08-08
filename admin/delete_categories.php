
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

// Check if the category ID is set and not empty
if(isset($_GET['id']) && !empty($_GET['id'])) {
    $category_id = $_GET['id'];

    // SQL query to delete the category with the given ID
    $delete_query = "DELETE FROM categories WHERE categories_id = $category_id";

    // Execute the delete query
    if(mysqli_query($con, $delete_query)) {
        // Category deleted successfully, redirect back to the categories page
        echo "<script>window.open('view_categories.php','_self')</script>"; // Remove the .php extension
        exit();
    } else {
        // Error occurred while deleting the category
        echo "Error: " . mysqli_error($con);
    }
}
?>
	
</div>

