<?php
     include('../include/connection.php');
     session_start();

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
                    $_SESSION['logged_in']=true;
                    $_SESSION['username']=$result_fetch['username'];
                    header ("location:index.php");
                }
                else
                {
                    echo "<script>
                    alert('Incorrect Password');
                    window.location.href='index.php';
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


