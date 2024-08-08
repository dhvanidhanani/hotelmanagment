<?php
    $con=mysqli_connect('localhost','root','','restaurent');
    if(mysqli_connect_error()){
        echo "<script>alert('cannot connect database');</script>";
        exit();
    }
?>