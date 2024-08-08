<?php
    include('../include/connection.php');
?>

<?php
// session_start();
include('../include/connection.php');
include "header.php";

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
		/* background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('../images/WhatsApp Image 2024-03-12 at 1.05.10 PM.jpeg') no-repeat center center fixed; */
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
	border:;
	color: black;
	width: 80%;
	border: 1px solid #ccc
	/* border-radius: 10px; */
	font-weight: bold;
}
       .sidebar
       {
        position: sticky;
        top: 0;
        left: 0;
        bottom: 0;
        width: 400px;
        height: 100vh;
        padding: 0 1.7rem;
        color: #fff;
        overflow: hidden;
        transition: all 0.5s linear;
        background:#666666;
       }
	   .icon
	   {
		margin-left:100px;
	   }
</style>
<div class="content">
<form action="" method="post">
	<table border="1" align="center" width="70%" cellpadding="10" cellspacing="15">
	<tr align="center">
			<td class="title">Upload New Food Category
			<a href="view_categories.php"><i class="fa-solid fa-eye icon"></i></a>
			<i class="fa-solid fa-plus"></i>
    </tr> 
	<tr align="center">
			<td><input type="text" name="cat_title" value="" placeholder="Insert Categories" class="subcat" required></td>
	</tr>
	<tr align="center">
			<td><input type="submit" name="update_cat" value="Upload Now" class="btn"></td>
	</tr>
</table>
</form>

<?php
if(isset($_POST['update_cat'])){
    $category_title=$_POST['cat_title'];
    $insert_query="insert into `categories` (categories_title) values ('$category_title')";
    $result=mysqli_query($con, $insert_query);
    if($result){
        echo "<script>alert('Categories add successfully')</script>";
    }
}

?>
</div>
