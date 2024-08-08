<?php include "header.php"; ?>
<?php include "../include/connection.php"; ?>
<link rel="stylesheet" type="text/css" href="">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<style type="text/css">
    table 
    {
        margin-left:70px;
    }
    tr {
        font-size: 20px;
    }
    .del {
        color: red;
        text-decoration: none;
    }

    .del:hover {
        color: blue;
        text-decoration: none;
        text-shadow: 2px 3px 2px #FFFFFF;
    }

    .btn {
        color: white;
        background-color: black;
        padding: 10px;
    }
    body {
        margin: 0;
        padding: 0;
        background-size: cover;
        font-family: 'L';
    }
    .icon
	   {
		margin-left:100px;
	   }
</style>
<div class="content">
    <center><a href="gallery.php" style="text-decoration: none; color: black; font-size:25px;"><i class="fas fa-plus"></i></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <!-- <a href="view_gallery.php" style="text-decoration: none; color: black; font-size:25px;"><i class="fas fa-eye"></i></a></center> -->

    <table border=0 cellpadding="10" cellspacing="5" >
        <?php
        $r = 0;
        $s = mysqli_query($con, "select * from gallery");
        while ($row = mysqli_fetch_array($s)) {
            if ($r % 4 == 0) {
                echo "<tr>";
            }
            echo "<td> <img src='{$row['image']}' alt='' width=250px height=200> <br><center><a href='#' onclick='return confirmDelete({$row['id']})' style='text-decoration:none; color:black;'> <i class='fa-solid fa-trash'></i> </a></center> </td>";

            if ($r % 4 == 3) {
                echo "</tr>";
            }
            $r++;
        }
        ?>

    </table>
    <br><br>
</div>
<script>
    function confirmDelete(id) {
        if (confirm("Are you sure you want to delete this image?")) {
            window.location.href = "delete_gallery.php?id=" + id;
            return true;
        } else {
            return false;
        }
    }
</script>