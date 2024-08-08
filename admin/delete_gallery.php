<?php
$id = $_GET['id'];
include "connect.php";
mysqli_query($con,"delete from gallery where id='$id'");
header("location:view_gallery.php");
?>