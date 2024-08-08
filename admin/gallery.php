<?php include "header.php"; ?>
<?php include "connect.php"; ?>
<link rel="stylesheet" type="text/css" href="">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<style type="text/css">
	tr{
		font-size: 1.0em;
		color:black;
	}
	.del{
		color: red;
		text-decoration: none;
	}
	.del:hover{
		color: blue;
		text-decoration: none;
		text-shadow: 2px 3px 2px #FFFFFF;
	}
	.btn{
		color: black;
		background-color: black;
		padding: 10px;
	}
	body{
		margin: 0;
		padding: 0;
		/* background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('../images/WhatsApp Image 2024-03-12 at 1.05.10 PM.jpeg') no-repeat center center fixed; */
		background-size: cover;
		font-family: 'L';
		/* font-size: 0.5em; */
		/* z-index:-2; */
	} 
	.content{
		font-size:20px;
		width: 40%;
		margin: 0 auto;
		margin-top: 200px;
		margin-left: 350px;
		padding: 40px;
		/* background-color: white; */
	}
	.btn{
	color: white;
	background-color: #666666;
	border:0px;
	box-shadow: 1px 1px 1px 1px;
	width: 30%;
	height: 50px;
	font-size: 0.7em;
	margin-top:10px;
	margin-bottom: 10px;
	margin-left: 10px;
	margin-right: 10px;
}
a{
    color: black;
	align:center;
    /* text-decoration: none;
    outline: none; */
	
}
.icon
	   {
		margin-left:350px;
	   }
</style>
<div class="content">
	<form action="" method="post" enctype="multipart/form-data">
	<table width="120%" cellspacing="5" cellpadding="5" style="border: 1px solid black;">
		<tr>
			<th colspan="2"><center><a href="view_gallery.php"><i class="fa-solid fa-eye icon"></i></a></th></center>
		</tr>
		<tr>
			<th>&nbsp;</th>
		</tr>
		<tr>
			<td align="right" width="50%">Choose Image Here : </td>
			<td><input type="file" name="img" value=""></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" class="btn" name="sb" value="    Upload Now    "></td>
		</td>
		<tr>
			<th>&nbsp;</th>
		</tr>
	</table>
	</form>
	<?php
	if(isset($_POST['sb']))
	{
		
		$i = "img/".$_FILES['img']['name'];
		move_uploaded_file($_FILES['img']['tmp_name'], $i);//move file inside folder

		
		include "connect.php";
	$query="insert into gallery(image)values('$i')" or die(mysqli_error($con));
		// echo "<div style='padding:15px; color:red; background-color:black; font-size:1.2em; border-radius:10px;'>Data Uploaded SuccessFully....</div>";
		if(mysqli_query($con, $query))
    {
        echo "<script>alert('Image Added Successfully');</script>";
    }
    else
    {
        echo "<script>alert('Error: Data Not Added Successfully');</script>";
    }
	}
	?>
	<br><br>	
</div>

