
<?php
// session_start();
include('../include/connection.php');

?>
<link rel="stylesheet" type="text/css" href="">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<style>
		/* .btn{
		color: white;
		background-color: black;
		padding: 40px;
	} */
	body{
		margin: 0;
		padding: 0;
		background-size: cover;
		font-family: 'L';
		color :black;
		/* font-size: 0.5em; */
		/* z-index:-2; */
	} 
	.content{
		font-size:21px;
		width: 100%;
		margin: 0 auto;
		margin-top: 120px;
		margin-left: 350px;
		padding: 40px;
		/* background-color: white; */
	}
	.btn{
		color: white;
	background-color: #666666;;
	border:0px;
	box-shadow: 1px 3px 5px 2px;
	width: 55%; 
    font-size: 15px;  
	height: 40px;
	font-size: 0.7em;
	margin-top:10px;
	margin-bottom: 10px;
	margin-left: 10px;
	margin-right: 10px;
	
}
a{
    color: black;
	/* align:center; */
    /* text-decoration: none;
    outline: none; */
	
}
.tt{
	padding: 10px;
	background-color: white;
	color: rgb(0, 0, 0);
	width: 70%;
	font-weight: bold;
}

.heading {
  text-align: center;
  font-weight: bold;
  color: #666666;
  background:#343a40;
}
.subcat{
	padding: 15px;
	background-color: #f8f8f8;
    font-size: 15px;    
	border:;
	color: black;
	width: 55%;
	/* border: 1px solid #ccc; */
	/* border-radius: 10px; */
	/* font-weight: bold; */
	margin-top:10px;
        /* margin-bottom: 10px; */
    margin-left: 10px;
    margin-right: 10px;
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
        width: 140px;
        height: 100vh;
        padding: 0 1.7rem;
        color: #fff;
        overflow: hidden;
        transition: all 0.5s linear;
        background:#666666;
       }
       .sidebar:hover
       {
        width: 400px;
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
        margin: 8px;
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
<div class="content">
<form action="" method="post">
	<table border="1" align="center" width="70%" cellpadding="10" cellspacing="15">
	<tr align="center">
			<td class="title" style=" font-size: 20px;">Upload New Food Category
			<a href="view_categories.php"><i class="fa-solid fa-eye icon"></i></a>
			<!-- <i class="fa-solid fa-plus"></i> -->
    </tr> 
	<tr align="center">
			<td><input type="text" name="cat_title" value="" placeholder="Insert Categories" class="subcat" required></td>
	</tr>
	<tr align="center">
			<td><input type="submit" name="insert_cat" value="Upload Now" class="btn"></td>
	</tr>
</table>
</form>

<?php
if(isset($_POST['insert_cat'])){
    $category_title=$_POST['cat_title'];
    $insert_query="insert into `categories` (categories_title) values ('$category_title')";
    $result=mysqli_query($con, $insert_query);
    if($result){
        echo "<script>alert('Categories add successfully')</script>";
    }
}

?>
</div>
