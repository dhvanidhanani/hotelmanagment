<?php 
include('../include/connection.php');
session_start();
include "header.php"; ?> 
<body>
	<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1> REGISTRATION US </h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
	
	<!-- Start Contact -->
	
	<div class="contact-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12">
     <form action="" method="POST"> 
     <table border="0" align="center" cellpadding="5" cellspacing="7">
     <tr align="right">	
		     <td> <img src="../Login.png" style="width: 40%"> <br>
		      <a href="login.php"> Registreted User?</a></td>
		 </tr>
  <tr><td>Enter your fullname </td>
  	<td> 
      <input type="text" placeholder="Full name" name="full_name" id="" required=""style="padding: 10px; width: 150%"> <br>  </td>
    </tr>
   
   <tr>	 <td>Enter your username </td>
 <td> <input type="text" placeholder="Username" name="username" id="" required="" style="padding: 10px; width: 150%"> <br> </td>
   </tr>

<tr>   <td>Enter your Age</td>
 <td> <input type="number" placeholder="Age" name="age" id="age" required="" style="padding: 10px; width: 150%">  <br> </td>
</tr>
<tr> <td>Select your Gender</td>
    <td> 
    <label for="male">Male:</label>
    <input type="radio" id="male" name="gender" value="male">
    <br>
    <label for="female">Female:</label>
    <input type="radio" id="female" name="gender" value="female">
    <br>
</td>
</tr>
<tr>  <td>Enter your Mobile No</td>
 <td> <input type="number" placeholder="Mobile No" name="mno" id="" required="" style="padding: 10px; width: 150%">  <br> </td>
</tr>
<tr>  <td>Enter your Email</td>
 <td> <input type="email" placeholder="E-mail" name="email" id="" required="" style="padding: 10px; width: 150%">  <br> </td>
</tr>
<tr>   <td>Enter your password</td>
 <td> <input type="password" placeholder="Password" name="password" id="" required="" style="padding: 10px; width: 150%">  <br> </td>
</tr>

<tr>   <td>Enter your address</td>
 <td> <input type="text" placeholder="Address" name="address" id="address" required="" style="padding: 10px; width: 150%">  <br> </td>
</tr>
<tr>   <td>Enter your city</td>
 <td> <input type="text" placeholder="City" name="city" id="city" required="" style="padding: 10px; width: 150%">  <br> </td>
</tr>
<tr>   <td>Enter your state</td>
 <td> <input type="text" placeholder="State" name="state" id="" required="" style="padding: 10px; width: 150%">  <br> </td>
</tr>   
<tr align="right">   
<td align="right"> <input type="submit" name="register" value="Registration Now" style="color:; background: lightgreen; font-size: 1.3em; font-family: times new roman">  <br> </td>
   </tr>
   </table>
    </form>

 <?php
 if(isset($_POST['register']))
{
    $q="SELECT * FROM `tbluser` where `username`='$_POST[username]' OR `email`='$_POST[email]'";
    $result=mysqli_query($con,$q);
    if($result)
    {
        if(mysqli_num_rows($result)>0)
        {
            // if any user has already exist username or email
            $result_fetch=mysqli_fetch_assoc($result);
            if($result_fetch['username']==$_POST['username'])
            {
                // error for username already registered
                echo "<script>
                alert('$result_fetch[username] - username already exist');
                window.location.href='index.php';
                </script>";
            }
            else
            {
                // error for email already registered
                echo "<script>
                alert('$result_fetch[email] - E-mail already exist');
                window.location.href='index.php';
                </script>";
            }
        }
        else
        {
            $password=password_hash($_POST['password'],PASSWORD_BCRYPT);
            // $v_code= bin2hex(random_bytes(16));
          $q=" INSERT INTO `tbluser` (`full_name`, `username`, `age`, `gender`, `mno`, `email`, `password`, `address`, `city`, `state`) VALUES ('$_POST[full_name]', '$_POST[username]', '$_POST[age]', '$_POST[gender]', '$_POST[mno]', '$_POST[email]', '$password', '$_POST[address]', '$_POST[city]', '$_POST[state]')";

        //   $qry = "INSERT INTO `registered_users` (`name`, `username`,`age`,`gen`,`email`, `password`,`address`,`city`,`state`,`mno`,`adno`) VALUES ('$_POST[fullname]','$_POST[username]','$_POST[age]','$_POST[gen]','$_POST[email]','$password','$_POST[addr]','$_POST[city]','$_POST[state]','$_POST[mno]','$_POST[adno]')";

            // $q="INSERT INTO `tbluser`(`full_name`, `username`, `email`, `password`) VALUES ('$_POST[full_name]','$_POST[username]','$_POST[email]','$password')";
            if(mysqli_query($con,$q))
            {
                // if data inserted successfully
                echo "<script>
                alert('Registration successfully');
                window.location.href='index.php';
                </script>";
            }
            else
            {
                // if data cannot be inserted
                echo "<script>
                alert('Server Down');
                window.location.href='index.php';
                </script>";
            }
        }
    }
    else
    {
        echo "<script>
        alert('Cannot run query');
        window.location.href='index.php';
        </script>";
    }
}
?>
				</div>
			</div>
		
		</div>
	</div>
	<!-- End Contact -->
<?php include "footer.php"; ?>


