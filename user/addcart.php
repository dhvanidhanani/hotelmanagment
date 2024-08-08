<?php
session_start();
include('../include/connection.php');
include "header.php";
?>

<!-- start Page -->
<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Add Cart</h1>
				</div>
			</div>
		</div>
	</div>
<!-- End page -->
	
<!-- Start contact -->
<div class="contact-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12">

	<form action="" method="post">
		
	<table align="center" border="1" cellspacing="14" cellpadding="12" style="color: black" >

 
<tr align="center">

	<td style="color: red">  Product ID  </td>
	<td> <input type="hidden" name="pid"  value="<?php echo $_GET['pid']; ?>"><?php echo $_GET['pid']; ?></td>
	
</tr>

<tr align="center">
	<td style="color: red">   Your USERNAME </td>
	<td> <input type="hidden" name="username" value="<?php echo $_GET['username']; ?>"><?php echo $_GET['username']; ?></td>
</tr>
<tr align="center">
	<td style="color: red">   Price </td>
	<td> <input type="hidden" name="price" value="<?php echo $_GET['price']; ?>"><?php echo $_GET['price']; ?></td>
</tr>
	<tr align="center">
	<td style="color: red">   QTY</td>
	<td> <input type="number" name="qty" value="" min=1 max=20 required></td>
</tr>

<tr align="center">
	<td colspan="4"> <input type="submit" name="sb" value="Add Cart Now"></td>
</tr>
</table>
	</form>
			<?php
			if(isset($_POST['sb']))
			{
				$pid = $_POST['pid'];
				$username = $_POST['username'];
				$price = $_POST['price'];
				$qty = $_POST['qty'];
				$total  = $price*$qty;
				mysqli_query($con,"insert into addcart(p_id,user_name,price,qty,total ) values('$pid','$username','$price','$qty','$total')") or die(mysqli_error($con));
                echo "<script>
                    alert('Your data Is Add Inside Cart');
                    window.location.href='cart.php';
                    </script>";

			}
			?>
				</div>
			</div>
		
		</div>
	</div>
<!-- End contact -->

<?php
include "footer.php";
?>