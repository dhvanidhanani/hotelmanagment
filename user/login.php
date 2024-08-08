<?php 
session_start();
include('../include/connection.php');
include "header.php"; ?> 
<body>
	
	<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Login </h1>
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
<form action="" method="post">

  <table border="0" align="center" cellpadding="5" cellspacing="7">
	
	        <tr align="right">	
		     <td> <img src="../Login.png" style="width: 30%"> <br>
		      <a href="registration.php"> New User?</a></td>
		 </tr>
		<tr>
             <td> Enter your username </td>
        <td> <input type="text" name="email_username" placeholder="User Name" style="padding: 10px; width: 150%"> <br>  </td>
		</tr>

		<tr>
           <td> Enter your password</td>
            <td> <input type="Password" name="password" placeholder="Password" style="padding: 10px; width: 150%"> <br>   </td>
		</tr>
		<tr align="right">	    
 <td align="right"> <input type="submit" name="login" value="Login Now" style="color: ; background-color: lightgreen; font-size: 1.5em; font-family: times new roman;">
<p align="right" class="small mt-2"><a href="forgotpsw.php" class="text-danger">Forgot Password ?</a></p>
</td> 
</tr>
</table>           
</form>
				
			</div>
			</div>
		
		</div>
	</div>
	<!-- End Contact -->
	<?php
     

// For Log-in
if(isset($_POST['login'])){
    $q="SELECT * from `tbluser` where `email`='$_POST[email_username]' OR `username` ='$_POST[email_username]'";
    $result= mysqli_query($con,$q);

    if($result)
    {
        if(mysqli_num_rows($result)==1)
        {
                $result_fetch=mysqli_fetch_assoc($result);
                if(password_verify($_POST['password'],$result_fetch['password']))
                {
                    // echo "<script>
                    // alert('success login');
                    // window.location.href='2.php';
                    // </script>";
                    $_SESSION['logged_in']=true;
                    $_SESSION['username']=$result_fetch['username'];
                    // $_SESSION['username']=$username;
                    // header ("location:index.php");
                    echo "<script>window.open('index.php','_self')</script>";
                } 
                else 
                {
                    echo "<script>
                    alert('Incorrect Password');
                    window.location.href='login.php';
                    </script>";
                }
        }
        else
        {
            echo "<script>
                alert('Email or Username Not registrated');
                window.location.href='index.php';
                </script>";
        }
    }
    else
    {
        echo "<script>
        alert('Cannot Run Query');
        window.location.href='index.php';
        </script>";
    }
}

?>

<?php include "footer.php"; ?>
