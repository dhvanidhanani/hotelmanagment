<?php
include "header.php";
include "../include/connection.php";

if (isset($_GET['a'])) {
    $itemId = $_GET['a'];
    mysqli_query($con, "DELETE FROM addtable WHERE id='$itemId'");
    echo "<script>
    alert('Your table delete successfully...');
    window.location.href='view_table.php';
    </script>";
} else {
    echo "error";
}
?>