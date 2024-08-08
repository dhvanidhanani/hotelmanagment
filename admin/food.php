<script>
function showUser(str) {
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","getsub_cart.php?q="+str,true);
    xmlhttp.send();
  }
}
</script>

<link rel="stylesheet" type="text/css" href="">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

<style>
    
    /* CSS for double-line border effect */
    .content table {
        border-collapse: separate;
        border-spacing: 2px;
        border: 1px double black;
        width: 100%;
    }

    /* Add any additional styling for your tables */
    .content table tr td,
    .content table tr th {
        padding: 10px;
        text-align: center;
    }

    .content table tr th {
        background-color: #f2f2f2; /* Light gray background for header */
    }

    .content table tr:hover {
        background-color: #e0e0e0; /* Light gray background on hover */
    }

    .content table tr td a.del {
        color: black;
        text-decoration: none;
    }

    .content table tr td a.del:hover {
        color: blue;
        text-decoration: none;
        text-shadow: 2px 3px 2px #FFFFFF;
    }

    .content table tr th,
    .content table tr td {
        border: 1px solid black; /* Single line border for each cell */
    }

    .heading {
        text-align: center;
        font-weight: bold;
        color: black;
    }

    .delix-insert {
        width: 80%;
        margin: 0 auto;
    }

    .delix-insert form table {
        width: 80%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    .delix-insert form table tr {
        border-bottom: 1px solid #ccc;
    }

    .delix-insert form table tr:last-child {
        border-bottom: none;
    }

    .delix-insert form table tr td {
        padding: 10px;
        font-size: 17px;
        vertical-align: middle;
        border: 1px solid #ccc; /* Add border to each cell */
    }

    .delix-insert form table tr td:first-child {
        width: 150px;
        font-weight: bold;
    }

    .delix-insert form table tr td input[type="text"],
    .delix-insert form table tr td select {
        width: calc(100% - 20px); /* Adjust input width */
        padding: 8px;
        border-radius: 5px;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    .delix-insert form table tr td button {
        padding: 10px 20px;
        margin-top: 10px;
        border: none;
        background-color: #cdb1e5;
        color: #fff;
        font-size: 16px;
        border-radius: 5px;
        cursor: pointer;
    }

    /* Remove box shadow for table */
    /* .delix-insert form table {
        box-shadow: none;
        width: 100%;
    
    } */
    .delix-insert form table {
        box-shadow: none !important;
        width: 80%;
        margin-left:120px;
    }
    .delix-insert {
        /* display: flex; */
        justify-content: center;
        width: 100%;
        margin: 30px;
        /* margin-top:100px; */
    }
    /* Adjust text area style */
    .delix-insert form table tr td textarea {
        width: calc(100% - 20px);
        padding: 8px;
        border-radius: 5px;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }
    #delux-btn {
            width: 80%;
            background-color: #cdb1e5;
            font-size: 16px;
            /* align:center; */
        } 
        .icon
	   {
		/* margin-left:100px; */
        color:black;
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
        width: 250px;
        transition: 0.5s;
       }
       .logo 
       {
        height:80px;
        padding:16 px;
       }
       .main
       {
        height:88%;
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
</style>
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
                <!-- <li>
                    <a href="admin_registration.php">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Online Order</span>
                    </a>
                </li> -->
               
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
</body>

<div class="delix-insert">
    <form action="" method="post" enctype="multipart/form-data">
        <table border=0 align="center" width="50%" style="box-shadow: 1px 3px 15px 2px;" cellpadding="10" cellspacing="15">
        
            <h3 class="heading">Upload Food</h3>
            <tr>
            <td colspan=2 align="center"> <a href="view_food.php"><i class="fa-solid fa-eye icon"></i></a></td>
            </tr>
            <tr>
            <td>Choose Food Category</td>
            <td>
            <select class="tt" name="cat" onchange="showUser(this.value)">
        <option value="">Select Option</option>
        <?php
        include "connect.php";
        $q = "SELECT * FROM categories";
        $result = mysqli_query($con, $q);
        while ($row = mysqli_fetch_assoc($result)) {
            $categories_title = $row['categories_title'];
            $categories_id = $row['categories_id'];
            echo "<option value='$categories_title'>$categories_title</option>"; // Change value to categories_title
        }
        mysqli_close($con);
        ?>
    </select>
</td>


            </tr>
            <tr>
                <td> Choose SubCatagory</td>
                <td>
                <!-- <div id="txtHint"></div> -->
                    <div id="txtHint" class="t">Choose Your Main Category to Display Sub category</div>
                </td>
            </tr>
            <tr>
                <td> Enter Title</td>
                <td><input type="text" name="title" value="" placeholder="" class="tt" required></td>
            </tr>
            <tr>
                <td> Enter Food Detail </td>
                <td><textarea rows="4" name="detail" cols="35" class="ar" style="background-color: white; color: black; padding: 10px;"></textarea></td>
            </tr>
            <tr>
                <td> Enter Food price </td>
                <td> <input type="text" name="price" class="tt"> </td>
            </tr>
            <tr>
                <td> Enter Food Image </td>
                <td><input type="File" name="img" placeholder="" class="" required></td>
            </tr>
            <!-- <tr>
                <td colspan=2 align="center"> <input type="submit" name="s" value="Upload now" class="btn"> </td>
            </tr> -->
            <tr>
                    <td colspan="2">
                        <button type="submit" name="s" class="enter">Submit</button>
                        
                    </td>
                </tr>
        </table>
    </form>
<?php
if(isset($_POST['s'])) {
    // Retrieve form data
    $cat = $_POST['cat'];
    $scat = $_POST['scat'];
    $title = $_POST['title'];
    $det = $_POST['detail']; // Description
    $price = $_POST['price'];
    $i = "mimg/" . $_FILES['img']['name'];
    move_uploaded_file($_FILES['img']['tmp_name'], $i);

    // Include database connection
    include "connect.php";

    // Fetch categories_id from categories table based on the selected category name
    $cat_query = "SELECT categories_id FROM categories WHERE categories_title = ?";
    $stmt = $con->prepare($cat_query);
    $stmt->bind_param("s", $cat);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if category ID is fetched successfully
    if ($cat_row = $result->fetch_assoc()) {
        $categories_id = $cat_row['categories_id'];

        // Prepare and execute insertion query
        $insert_query = "INSERT INTO menu (categories_id, sub_cat, title, description, price, image) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $con->prepare($insert_query);
        $stmt->bind_param("isssis", $categories_id, $scat, $title, $det, $price, $i);
        if($stmt->execute()) {
            echo "<script>alert('Data Added Successfully');</script>";
        } else {
            echo "<script>alert('Error: Data Not Added Successfully');</script>";
        }
    } else {
        echo "<script>alert('Error: Failed to fetch categories ID');</script>";
    }

    // Close database connection
    $stmt->close();
    $con->close();
}

?>  
</div>

<script>
function showUser(str) {
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "getsub_cart.php?q=" + str, true);
    xmlhttp.send();
  }
}
</script>