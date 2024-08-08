<?php
require('connection.php');
session_start();

// For Log-in
if(isset($_POST['login'])){
    $q="SELECT * from `admin` where `email`='$_POST[email_username]' OR `username` ='$_POST[email_username]'";
    $result= mysqli_query($con,$q);

    if($result)
    {
        if(mysqli_num_rows($result)==1)
        {
                $result_fetch=mysqli_fetch_assoc($result);
                if(password_verify($_POST['password'],$result_fetch['password']))
                {
                    $_SESSION['logged_in']=true;
                    $_SESSION['username']=$result_fetch['username'];
                    header ("location:admin/index.php");
                }
                else
                {
                    echo "<script>
                    alert('Incorrect Password');
                    window.location.href='admin/index.php';
                    </script>";
                }
        }
        else
        {
            echo "<script>
                alert('Email or Username Not registrated');
                window.location.href='admin/index.php';
                </script>";
        }
    }
    else
    {
        echo "<script>
        alert('Cannot Run Query');
        window.location.href='admin/index.php';
        </script>";
    }
}

// For Registration
if(isset($_POST['register']))
{
    $q="SELECT * FROM `admin` where `username`='$_POST[username]' OR `email`='$_POST[email]'";
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
                window.location.href='admin/index.php';
                </script>";
            }
            else
            {
                // error for email already registered
                echo "<script>
                alert('$result_fetch[email] - E-mail already exist');
                window.location.href='admin/index.php';
                </script>";
            }
        }
        else
        {
            $password=password_hash($_POST['password'],PASSWORD_BCRYPT);
            // $v_code= bin2hex(random_bytes(16));
            $q="INSERT INTO `admin`(`full_name`, `username`, `email`, `password`) VALUES ('$_POST[full_name]','$_POST[username]','$_POST[email]','$password')";
            if(mysqli_query($con,$q))
            {
                // if data inserted successfully
                echo "<script>
                alert('Registration successfully');
                window.location.href='admin/index.php';
                </script>";
            }
            else
            {
                // if data cannot be inserted
                echo "<script>
                alert('Server Down');
                window.location.href='admin/index.php';
                </script>";
            }
        }
    }
    else
    {
        echo "<script>
        alert('Cannot run query');
        window.location.href='admin/index.php';
        </script>";
    }
}
?>