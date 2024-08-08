<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <style>
       *
       {
        margin: 0;
        padding: 0;
        border: none;
        outline: none;
        box-sizing: border-box;
        /* font-family: "Poppins",sans-serif; */
       } 
       body
       {
        display: flex;
        /* margin: 0;
		background-size: cover;
		font-family: 'L'; */
		
       }
       .sidebar
       {
        position: sticky;
        top: 0;
        left: 0;
        bottom: 0;
        width: 110px;
        height: 100vh;
        /* padding: 0 0.2rem; */
        /* color: #fff; */
        overflow: hidden;
        transition: all 0.5s linear;
        background:#666666;
       }
       .sidebar:hover
       {
        width: 250px;
        transition: 0.5s;
       }
       .logo 
       {
        height:80px;
        padding:16 px;
       }
       .main
       {
        height:88%;
        position:relative;
        list-style:none;
       }
       .main li 
       {
        padding: 1rem;
        /* margin: 8px; */
        margin-right:10px;
        border-radius: 8px;
        transition: all 0.5s ease-in-out;
       }
       .main li:hover,.active 
       {
        background:white;
        
       }
       .main a
       {
        color: black;
        font-size: 13px;
        text-decoration: none;
        display: flex;
        align-items:center;
        gap: 1.5rem;
       }
       .main a span 
       {
        overflow:hidden;
       }
       .main a i
       {
        font-size: 1.1rem;
       }
       .logout
       {
        position: absolute;
        width:100%;
       }
       
    </style>
</head>
<body>
    <div class="sidebar">  
        <div class="logo">
  
            <ul class="main">
                <li class="">
                    <a href="wel_add.php">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <!-- <li>
                    <a href="admin_registration.php">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Online Order</span>
                    </a>
                </li> -->
               
                <li>
                    <a href="categories.php">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Food Categories</span>
                    </a>
                </li>
                <li>
                    <a href="food_cart.php">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Food Item</span>
                    </a>
                </li>
                <li>
                    <a href="food.php">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Food Menu</span>
                    </a>
                </li>
              
                <li>
                    <a href="gallery.php">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Food gallery</span>
                    </a>
                </li>
                <li>
                    <a href="addtable.php">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Add Table</span>
                    </a>
                </li>
                <li>
                    <a href="viewtablebook.php">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Table Booking</span>
                    </a>
                </li>
                <li>
                    <a href="vieworder.php">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>View Online Order</span>
                    </a>
                </li>
                <li>
                    <a href="review.php">
                        <i class="fas fa-briefcase"></i>
                        <span>Review</span>
                    </a>
                </li>
                <li>
                    <a href="manage_customer.php">
                        <i class="fas fa-briefcase"></i>
                        <span>Manage User</span>
                    </a>
                </li>
                <li>
                    <a href="logout.php">
                        <i class="fas fa-sign-out-alt"></i>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</body>
</html>