<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Update</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-decoration:none;
            font-family: poppins;
        }
        form{
            position: absolute;
            top:50%;
            left:50%;
            transform: translate(-50%,-50%);
            background-color:azure;
            width: 350px;
            border-radius: 5px;
            padding: 20px 25px 30px 25px;
        }
        form h3{
            margin-bottom: 15px;
            color: #304753;
        }
        form input{
            width: 100%;
            margin-bottom: 20px;
            background-color: transparent;
            border: none;
            border-bottom: 2px solid #303030;
            border-radius: 0;
            padding: 5px 0;
            font-weight: 550;
            font-size: 14px;
            outline: none;
        }
        form button{
            font-weight: 550;
            font-style: 15px;
            color: white;
            background-color: #30475e;
            padding: 4px 10px;
            border: none;
            outline: none;
        }
    </style>
</head>
<body>
    
<?php
    require("connection.php");
    session_start();
    if(isset($_GET['email']) && isset($_GET['reset_token']))
    {     
        // date_default_timezone_set('Asia/Gujrat');
        $date=date("Y-m-d");
        $q="SELECT * FROM `admin` WHERE `email`='$_GET[email]' AND `resettoken`='$_GET[reset_token]' AND `resettokenexpire`='$date'";
        $result=mysqli_query($con,$q);
        if($result)
        {
            if (mysqli_num_rows($result)==1)
            {
                echo 
               " <form method='POST'>
                    <h3>Create New Password</h3>
                    <input type='password' placeholder='Password' name='password' >
                    <button type='submit' name='updatepassword'>UPDATE</button>
                    <input type='hidden'  name='email' value='$_GET[email]'>
                </form>";
            }
            else
            {
                echo "<script>
                alert('Invalid or Expired Link');
                window.location.href='aindex.php';
                </script>";
            }
        }
        else
        {
            echo "<script>
                alert('Server Down! try agian letter');
                window.location.href='aindex.php';
                </script>";
        }
    }
?>

<?php
    if(isset($_POST['updatepassword']))
    {
        $password=password_hash($_POST['password'],PASSWORD_BCRYPT);
        $update ="UPDATE `admin` SET `password`='$password',`resettoken`=NULL,`resettokenexpire`=NULL WHERE `email`='$_POST[email]'";
        if(mysqli_query($con,$update))
        {
            echo "<script>
                alert('Password Updated successfully..');
                window.location.href='aindex.php';
                </script>";
        }
        else
        {
            echo "<script>
            alert('Server Down');
            window.location.href='aindex.php';
            </script>";
        }
    }
?>
</body>
</html>