<?php
$con = mysqli_connect('localhost', 'root', '', 'hotel');
if (mysqli_connect_error()) {
    echo "<script>alert('cannot connect database');</script>";
    exit();
}

function search_table($id)
{
    global $con;
    $stmt = $con->prepare("SELECT * FROM addtable WHERE id=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $stmt->close();
    return $result;
}

function update_table($id, $table_no, $table_type, $table_price, $table_detail, $target_file, $table_capacity)
{
    global $con;
    $stmt = $con->prepare("UPDATE addtable SET tableno=?, tabletype=?, price=?, detail=?, images=?, capacity=? WHERE id=?");
    $stmt->bind_param("isdssii", $table_no, $table_type, $table_price, $table_detail, $target_file, $table_capacity, $id);
    $stmt->execute();
    $stmt->close();
}

if (isset($_POST['submit'])) {
    $table_no = $_POST['table_no'];
    $table_type = $_POST['table_type'];
    $table_price = $_POST['table_price'];
    $table_detail = $_POST['table_detail'];
    $target_file = null;
    $table_capacity = $_POST['table_capacity'];

    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $file_name = $_FILES['image']['name'];
        $file_tmp = $_FILES['image']['tmp_name'];
        $target_file = 'uploads/' . basename($file_name);

        if (move_uploaded_file($file_tmp, $target_file)) {
            $stmt = $con->prepare("INSERT INTO addtable (tableno, tabletype, price, detail, images, capacity) 
                    VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("isdssi", $table_no, $table_type, $table_price, $table_detail, $file_name, $table_capacity);

            if ($stmt->execute()) {
                echo "<script>alert('Table inserted successfully.');</script>";
                echo "<meta http-equiv='refresh' content='0'>"; 
                exit();
            } else {
                echo "Error: " . $stmt->error;
            }

            $stmt->close();
        } else {
            echo "Error: Failed to move uploaded file.";
        }
    } else {
        echo "Error: No file uploaded or error occurred during upload.";
    }
}

if (isset($_POST['update'])) {
    $table_no = $_POST['table_no'];
    $table_type = $_POST['table_type'];
    $table_price = $_POST['table_price'];
    $table_detail = $_POST['table_detail'];
    $target_file = null;
    $table_capacity = $_POST['table_capacity'];

    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $file_name = $_FILES['image']['name'];
        $file_tmp = $_FILES['image']['tmp_name'];
        $target_file = 'uploads/' . basename($file_name);

        if (move_uploaded_file($file_tmp, $target_file)) {
            $id = $_POST['table_id'];
            update_table($id, $table_no, $table_type, $table_price, $table_detail, $file_name, $table_capacity);
            echo "<script>alert('Table updated successfully.');</script>";
        } else {
            echo "Error: Failed to move uploaded file.";
        }
    } else {
        echo "Error: No file uploaded or error occurred during upload.";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Insert Section</title>
    <link rel="stylesheet" href="stylee.css">
    <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
        <style>
        body::before {
            position: absolute;
            content: "";
            height: 100%;
            width: 100%;
            z-index: -1;
            opacity: 0.89;
            object-fit: cover;
            background: url('../img/hall4.webp') center center/cover no-repeat;
        }

        h1 {
            text-align: center;
            margin-top: 20px;
        }

        .delux-insert {
            height: 230px;
            width: 400px;
            border-radius: 10px;
            margin-left: 38%;
        }

        .delux-insert form {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin-top:10px;
            /* padding-top: 30px; */
        }

        .delux-insert form table tr td input {
            /* padding: 4px 0; */
            /* margin-bottom: 10px; */
            border-radius: 8px;
            /* padding-left: 10px; */
        }

        .delux-insert form table tr td {
            font-size: 20px;
        }

        #delux-btn {
            width: 80%;
            background-color: #cdb1e5;
            font-size: 16px;
        }

        .imgg {
            display: flex;
            justify-content: space-evenly;
            margin-top: 10px;
        }

        img {
            width: 350px;
        }

        body::before {
            position: absolute;
            content: "";
            height: 100%;
            width: 100%;
            z-index: -1;
            opacity: 0.89;
            object-fit: cover;
            background: url('../img/hall4.webp') center center/cover no-repeat;
        }

        h1 {
            text-align: center;
            margin-top: 20px;
        }

        .delux-insert {
            width: 100%;
            margin: 0 auto;
        }

        .delux-insert form table {
            width: 80%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .delux-insert form table tr {
            border-bottom: 1px solid #ccc;
        }

        .delux-insert form table tr:last-child {
            border-bottom: none;
        }

        .delux-insert form table tr td {
            padding: 10px;
            font-size: 18px;
            vertical-align: middle;
            border: 1px solid #ccc; /* Add border to each cell */
        }

        .delux-insert form table tr td:first-child {
            width: 150px;
            font-weight: bold;
        }

        .delux-insert form table tr td input[type="text"],
        .delux-insert form table tr td select {
            width: calc(100% - 20px); /* Adjust input width */
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        .delux-insert form table tr td button {
            padding: 10px 20px;
            margin-top: 10px;
            border: none;
            background-color: #cdb1e5;
            color: #fff;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }

        .imgg {
            display: flex;
            justify-content: space-evenly;
            margin-top: 10px;
        }

        img {
            width: 350px;
        }
        .heading {
        text-align: center;
        font-weight: bold;
        color: black;
    }
    .icon
	   {
		margin-left:850px;
	   }
       *
       {
        margin: 0;
        padding: 0;
        border: none;
        outline: none;
        box-sizing: border-box;
        /* font-family: "Poppins",sans-serif; */
       } 
       body
       {
        display: flex;
        /* margin: 0;
		background-size: cover;
		font-family: 'L'; */
		
       }
       .sidebar
       {
        position: sticky;
        top: 0;
        left: 0;
        bottom: 0;
        width: 110px;
        height: 100vh;
        padding: 0 1.5rem;
        color: #fff;
        overflow: hidden;
        transition: all 0.5s linear;
        background:#666666;
       }
       .sidebar:hover
       {
        width: 280px;
        transition: 0.5s;
       }
       .logo 
       {
        height:80px;
        padding:16 px;
       }
       .main
       {
        height:100%;
        position:relative;
        list-style:none;
       }
       .main li 
       {
        padding: 1rem;
        /* margin: 8px; */
        border-radius: 8px;
        transition: all 0.5s ease-in-out;
       }
       .main li:hover,.active 
       {
        background:white;
       }
       .main a
       {
        color: black;
        font-size: 14px;
        text-decoration: none;
        display: flex;
        align-items:center;
        gap: 1.5rem;
       }
       .main a span 
       {
        overflow:hidden;
       }
       .main a i
       {
        font-size: 1.2rem;
       }
       .logout
       {
        position: absolute;
        width:100%;
       }
	   .icon
	   {
		margin-left:80px;
        font-size: 20px;  
	   }
    </style>
</head>
<body>
<div class="sidebar">  
        <div class="logo">
  
            <ul class="main">
                <li class="">
                    <a href="wel_add.php">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="categories.php">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Food Categories</span>
                    </a>
                </li>
                <li>
                    <a href="food_cart.php">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Food Item</span>
                    </a>
                </li>
                <li>
                    <a href="food.php">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Food Menu</span>
                    </a>
                </li>
              
                <li>
                    <a href="gallery.php">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Food gellery</span>
                    </a>
                </li>
                <li>
                    <a href="addtable.php">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Add Table</span>
                    </a>
                </li>
                <li>
                    <a href="viewtablebook.php">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Table Booking</span>
                    </a>
                </li>
                <li>
                    <a href="vieworder.php">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>View Online Order</span>
                    </a>
                </li>
                <li>
                    <a href="review.php">
                        <i class="fas fa-briefcase"></i>
                        <span>Review</span>
                    </a>
                </li>
                <li>
                    <a href="manage_customer.php">
                        <i class="fas fa-briefcase"></i>
                        <span>Manage User</span>
                    </a>
                </li>
                <li>
                    <a href="logout.php">
                        <i class="fas fa-sign-out-alt"></i>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <?php
    include ('../bootstrap.php');
    
    ?>
    
    <!-- <h1>Table Insert Section</h1> -->
    <div class="imgg"></div>

    <div class="delux-insert">
        <form method="post" enctype="multipart/form-data">
            <table>
            <h5 class="heading">Table Insert</h5>
            <tr>
            <td colspan=2 align="center"> <a href="view_table.php" style="color: black; text-decoration: none;" class="icon"> <i class="fas fa-eye"></i></td>
                <!-- <td><a href="view_food.php" style="color: red; text-decoration: none;">View All Foods</a></td> -->
            </tr>
                <tr>
                    <td>Table No</td>
                    <td><input type="text" name="table_no" required placeholder="Enter Table No"></td>
                </tr>
                <tr>
                    <td>Event</td>
                    <td>
                        <select name="table_type">
                            
                            <option value="Birthday">Birthday Table</option>
                            <option value="Anniversary">Anniversary Table</option>
                            <option value="Candlelight">Candlelight Table</option>
                            <option value="Formal">Formal Table</option>
                            <option value="Outdoor">Outdoor Table</option>
                            <option value="Indoor">Indoor Table</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Table Price</td>
                    <td><input type="text" name="table_price" required placeholder="Enter Type Price"></td>
                </tr>
                <tr>
                    <td>Table Description</td>
                    <td><input type="text" name="table_detail" required placeholder="Enter Table Description"></td>
                </tr>
                <tr>
                    <td>Table image</td>
                    <td><input type="file" name="image" required></td>
                </tr>
                <tr>
                    <td>Table Capacity</td>
                    <td><input type="text" name="table_capacity" required placeholder="Enter Table Capacity"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button type="submit" name="submit" class="enter">Submit</button>
                        <!-- <button type="submit" name="update" class="enter">Update</button> -->
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
    </html>