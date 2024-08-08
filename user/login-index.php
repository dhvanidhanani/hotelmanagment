<?php
     include('../include/connection.php');
     session_start();
?>

<!DOCTYPE html>s
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User - Login and Register</title>
    <link rel="stylesheet" href="S.css" class="href">
</head>
<style>
    div.popup-container div.popup div.forgot-btn{
    text-align: right;
}
div.popup-container div.popup div.forgot-btn button{
    border: none;
    background-color: transparent;
    outline: none;
    cursor: pointer;
    font-weight: 450;    
} 

div.popup-container div.forgot button.reset-btn{
    font-weight: 550;
    font-style: 15px;
    color: white;
    background-color: #30475e;
    padding: 4px 10px;
    border: none;
    outline: none;
    margin-top: 5px;
}
div.popup-container div.forgot h2{
    color: brown;
}
div.popup-container div.forgot input{
    border-bottom-color: brown;
}
div.popup-container div.forgot button.reset-btn{
    background-color: brown;
}
</style>
<body>
    <header>
        <h2>Restaurent</h2>
        <nav>
        <a href="#">Home</a>
        <a href="#">Menu</a>
        <a href="#">Gallery</a>
        <a href="#">About US</a>
        <a href="#">Contact US</a>
        <a href="#">Review</a>
        <a href="#"></a></nav>

        <?php
            if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
            {
                echo "
                <div class='user'>
                $_SESSION[username] - <a href='logout.php'>LOGOUT</a>
                </div>";
            }
            else
            {
                echo "<div class='sign-in-up'>
                <button class='button' onclick=\"popup('login-popup')\">LOG-IN</button>
                <button class='button' onclick=\"popup('register-popup')\">REGISTER</button>
            </div>";
            }
        ?>
        
    </header>

    <div class="popup-container" id="login-popup">
        <div class="popup">
            <form action="login_register.php" method="POST">
                <h2>
                    <span>USER LOGIN</span>
                    <button type="reset" onclick="popup('login-popup')">X</button>
                </h2>
                <input type="text" placeholder="E-mail or Username" name="email_username" >
                <input type="password" placeholder="Password" name="password" >
                <button type="submit" class="login-btn" name="login">LOG-IN</button>
            </form>
            <div class="forgot-btn">
                    <button type="button" onclick="forgotpopup()">Forgot Password ?</button>
                </div>
        </div>
    </div>

    <div class="popup-container" id="register-popup">
        <div class="register popup">
            <form action="login_register.php" method="POST">
                <h2>
                    <span>USER REGISTRATION</span>
                    <button type="reset" onclick="popup('register-popup')">X</button>
                </h2>
                <input type="text" placeholder="Full name" name="full_name" id="">
                <input type="text" placeholder="Username" name="username" id="">
                <input type="email" placeholder="E-mail" name="email" id="">
                <input type="Password" placeholder="Password" name="password" id="">
                <button type="submit" class="register-btn" name="register">REGISTER</button>
            </form>
        </div>
    </div>
   
    <div class="popup-container" id="forgot-popup">
        <div class="forgot popup">
            <form action="forgotpassword.php" method="POST">
                <h2>
                    <span>RESET PASSWORD</span>
                    <button type="reset" onclick="popup('forgot-popup')">X</button>
                </h2>
                <input type="text" placeholder="E-mail" name="email" >
                <button type="submit" class="reset-btn" name="send-reset-link">SEND LINK</button>
            </form>
        </div>
    </div>

    <?php
        if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
        {
            echo "<h1 style='text-align: center;margin-top:200px'> welcome to this website - $_SESSION[username]</h1>";
        }
    ?>
<script>
    function popup(popup_name){
        get_popup=document.getElementById(popup_name);
        if(get_popup.style.display=="flex"){
            get_popup.style.display="none";
        }else{
            get_popup.style.display="flex";
        }
    }
    function forgotpopup(){
        document.getElementById('login-popup').style.display="none";
        document.getElementById('forgot-popup').style.display="flex";
    }
</script>
</body>
</html>