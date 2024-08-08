<?php
    $con=mysqli_connect('localhost','root','','hotel');
    if(mysqli_connect_error()){
        echo "<script>alert('cannot connect database');</script>";
        exit();
    }
?>