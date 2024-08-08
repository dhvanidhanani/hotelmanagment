<?php 
session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
	body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background-color: white;
    display: flex;
    justify-content: center;
    align-items: center;
    /* height: 100vh; */
}

.container {
    width: 100%;
    max-width: 400px;
    padding: 20px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.title {
    font-size: 24px;
    font-weight: bold;
    color: #333;
    margin-bottom: 20px;
}

.text {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

.btn {
    width: 100%;
    padding: 10px;
    background-color: #666666;
    border: none;
    color: #fff;
    font-size: 16px;
    font-weight: bold;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.btn:hover {
    background-color: #0056b3;
}
</style>

<body>
    <div class="container">
        <form action="login.php" method="post">
            <table border=0 align="center" bgcolor="white" width="100%" cellpadding="10" cellspacing="10" >
                <tr align="center">
                    <td class="title">ADMIN LOGIN HERE</td>
                </tr>
                <tr align="center">
                    <td><input type="text" name="aid" value="" placeholder="Enter Admin ID" class="text" required></td>
                </tr>
                <tr align="center">
                    <td><input type="password" name="pass" value="" placeholder="Enter Password" class="text" required></td>
                </tr>
                <tr align="center">
                    <td><input type="submit" name="s" value="Login Now" class="btn"></td>
                </tr>
                
            </table>
        </form>
    </div>
</body>
</html>
