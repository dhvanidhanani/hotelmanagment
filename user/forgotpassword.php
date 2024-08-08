<?php
     include('../include/connection.php');
     session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
function sendMail($email,$reset_token)
{
    require("../PHPMailer/PHPMailer.php");
    require("../PHPMailer/SMTP.php");
    require("../PHPMailer/Exception.php");

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'vishawapatel118@gmail.com';                     //SMTP username
        $mail->Password   = 'gdnvqpmelqqqdcng';                               //SMTP password
        // $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have 
        
        $mail->setFrom('vishawapatel118@gmail.com', 'TheSpiceHouseRestro');
        $mail->addAddress($email);     

       //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Password Reset Link From The Spice House Restaurent';
        $mail->Body    = "We got a request from you to reset your password <br>
        Click the link below : <br>
        <a href='http://localhost/php/Restaurent/updatepassword.php?email=$email&reset_token=$reset_token'>Reset Password ! </a>";
    
        $mail->send();
       return true;
    } catch (Exception $e) {
        return false;
    }
}


if(isset($_POST['send-reset-link']))
{
    $q="SELECT * FROM `tbluser` WHERE `email`='$_POST[email]'";
    $result=mysqli_query($con,$q);
    if($result)
    {
        if(mysqli_num_rows($result)==1)
        {
            $reset_token=bin2hex(random_bytes(16));
            date_default_timezone_set('Asia/Gujrat');
            $date=date("y-m-d");
            $query="UPDATE `tbluser` SET `resettoken`='$reset_token',`resettokenexpire`='$date' WHERE `email`='$_POST[email]'";
            if(mysqli_query($con,$query) && sendMail($_POST['email'],$reset_token))
            { 
                // sendMail($_POST['email'],$v_code))
                echo "<script>
                alert('Password Reset Link Sent to Mail');
                window.location.href='index.php';
                </script>";
            }
            else
            {
                echo "<script>
                alert('Server Down! try again later');
                window.location.href='index.php';
                </script>";
            }
        }
        else
        {
            echo "<script>
            alert('Email not Found');
            window.location.href='index.php';
            </script>";
        }
    }
    else
    {
        echo "<script>
        alert('Cannot run Query');
        window.location.href='index.php';
        </script>";
    }
}
?>