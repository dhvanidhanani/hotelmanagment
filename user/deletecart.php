<?php
include('../include/connection.php');
?>

<?php $id = $_GET['id'];

mysqli_query($con,"delete from addcart where id='$id'");
header("location:cart.php");
?>