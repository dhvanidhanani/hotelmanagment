<!-- <style>

/*
 * Sidebar
 */

.sidebar {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  z-index: 100; /* Behind the navbar */
  padding: 48px 0 0; /* Height of navbar */
  box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
}

.sidebar-sticky {
  position: relative;
  top: 0;
  height: calc(100vh - 48px);
  padding-top: .5rem;
  overflow-x: hidden;
  overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
}

@supports ((position: -webkit-sticky) or (position: sticky)) {
  .sidebar-sticky {
    position: -webkit-sticky;
    position: sticky;
  }
}

.sidebar .nav-link {
  font-weight: 500;
  color: #333;
}

.sidebar .nav-link .feather {
  margin-right: 4px;
  color: #999;
}

.sidebar .nav-link.active {
  color: #007bff;
}

.sidebar .nav-link:hover .feather,
.sidebar .nav-link.active .feather {
  color: inherit;
}

.sidebar-heading {
  font-size: .75rem;
  text-transform: uppercase;
}

/*
 * Content
 */

[role="main"] {
  padding-top: 133px; /* Space for fixed navbar */
}

@media (min-width: 768px) {
  [role="main"] {
    padding-top: 48px; /* Space for fixed navbar */
  }
}

/*
 * Navbar
 */

.navbar-brand {
  padding-top: .75rem;
  padding-bottom: .75rem;
  font-size: 1rem;
  background-color: rgba(0, 0, 0, .25);
  box-shadow: inset -1px 0 0 rgba(0, 0, 0, .25);
}

.navbar .form-control {
  padding: .75rem 1rem;
  border-width: 0;
  border-radius: 0;
}

.form-control-dark {
  color: #fff;
  background-color: rgba(255, 255, 255, .1);
  border-color: rgba(255, 255, 255, .1);
}

.form-control-dark:focus {
  border-color: transparent;
  box-shadow: 0 0 0 3px rgba(255, 255, 255, .25);
}
.resize{
  height: 100px;
}

</style>
<nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">

          <?php 
            // $uri = $_SERVER['REQUEST_URI']; 
            // $uriAr = explode("/", $uri);
            // $page = end($uriAr);
          ?>


          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <span data-feather="home"></span>
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
         <li class="nav-item">
            <a class="nav-link" href="add-movie.php">
              <span data-feather="users"></span>
              Add Movie
            </a>
          </li>
         <li class="nav-item">
            <a class="nav-link" href="Theater_and_show.php">
              <span data-feather="users"></span>
              Theater And Show
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="customers.php">
              <span data-feather="users"></span>
              Customers
            </a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="Feedback.php">
              <span data-feather="users"></span>
              Feedback
            </a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="users.php">
              <span data-feather="users"></span>
              Users
            </a>
          </li>
           
        </ul>
      </div>
    </nav>


    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
       
        
      </div> -->
      <!-- <div class="list-group bg-dark" style="height: 90vh;">
                        <a href="Dasbord.php" class="list-group-item list-group-item-action bg-dark text-center text-white">Dashboard</a>
                        <a href="" class="list-group-item list-group-item-action bg-dark text-center text-white">Appointment List</a>
                        <a href="" class="list-group-item list-group-item-action bg-dark text-center text-white">Registered Users</a>
                        <a href="add_test.php" class="list-group-item list-group-item-action bg-dark text-center text-white">Test List</a>
                        <a href="" class="list-group-item list-group-item-action bg-dark text-center text-white">User List</a>
                        <a href="system_info.php" class="list-group-item list-group-item-action bg-dark text-center text-white">Setting</a>
                    </div> -->

<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>
 .vertical-nav{
    width:200px;
    height:auto;
    list-style:none;
    float:left;
    margin-right:40px;
}
.vertical-nav li{
    width:200px;
    height:25px;
    margin:5px;
    padding:5px;
    background-color:#666666;
    border:none;
    text-align:center;
    float:left;
}
.vertical-nav li:hover{
    background-color:#f36f25;
    color:#FFFFFF;
}
.vertical-nav li a{
    font-family:Calibri, Arial;
    font-size:18px;
    font-weight:bold;
    color:#ffffff;
    text-decoration:none;
}
.vertical-nav li.current {
    background-color:#F36F25;
}
.vertical-nav li.current a {
    color:#FFFFFF;
}

</style>
<body>
<ul class="vertical-nav">
  
<li><a href="index.php">Home</a></li>
<li><a href="staff.php">Staff</a></li>
<li><a href="invoices.php">Invoices</a></li>
<li><a href="tickets.php">Tickets</a></li>
<li><a href="openticket.php">Open Ticket</a></li>
</ul>
</body>
</html>   -->

<!-- <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Vertical Navbar Example</title>
<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
  }
  .navbar {
    height: 100%;
    width: 200px; /* adjust width as needed */
    position: fixed;
    top: 0;
    left: 0;
    background-color: #333;
    padding-top: 20px;
  }
  .navbar ul {
    list-style-type: none;
    padding: 0;
  }
  .navbar li {
    padding: 10px 0;
    text-align: center;
  }
  .navbar a {
    display: block;
    color: white;
    text-decoration: none;
  }
  .navbar a:hover {
    /* background-color: #555; */
    color: purple;
	background-color: white;
	/* box-shadow: 1px 1px 10px 1px rgb(245, 9, 88); */
  }
  .content {
    margin-left: 200px; /* adjust margin to account for navbar width */
    padding: 20px;
  }
</style>
</head>
<body>

<div class="navbar">
  <ul>
    <li class="nav-item">
      <a href="admin_registration.php" class="nav-link">
        <span data-feather="home"></span>Home <span class="sr-only">(current)</span>
      </a>
    </li>
    <li><a href="admin_registration.php">
    <span data-feather="home"></span>Home</a></li>
    <li><a href="#">About</a></li>
    <li><a href="#">Services</a></li>
    <li><a href="#">Contact</a></li>
  </ul>
</div> -->
<!-- 
<div class="content">
  <h2>Content Area</h2>
  <p>This is the main content area.</p>
</div> -->

<!-- </body>
</html> -->

<!-- <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Dashboard Page</title>
<link rel="stylesheet" href="./css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
<!-- <link rel="stylesheet" href="./css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"> -->
    <!-- <style>
      .fa-trash-alt,.fa-pencil-alt{
        color: #fff;
      }
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style> -->
    <!-- Custom styles for this template -->
    <!-- <link href="./css/dashboard.css" rel="stylesheet">
  </head>

 <body> 
 <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#"><img src="logo.png" alt=""></a>

  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
    	<a class="nav-link" href="../admin/admin-logout.php">Sign out</a>	      
    </li>
  </ul>
</nav>
<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <span data-feather="home"></span>
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
         <li class="nav-item">
            <a class="nav-link" href="admin_registration.php">
              <span data-feather="users"></span>
              Add Movie
            </a>
          </li>
         <li class="nav-item">
            <a class="nav-link" href="Theater_and_show.php">
              <span data-feather="users"></span>
              Theater And Show
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="customers.php">
              <span data-feather="users"></span>
              Customers
            </a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="Feedback.php">
              <span data-feather="users"></span>
              Feedback
            </a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="users.php">
              <span data-feather="users"></span>
              Users
            </a>
          </li>  
        </ul>
      </div>
    </nav>
    <link rel="stylesheet" href="../css/bootstrap.min.css">    
    <link rel="stylesheet" href="../css/style.css">    
    <link rel="stylesheet" href="../css/responsive.css">
    <link rel="stylesheet" href="../css/custom.css">
    </body>
</html>
<script type="text/javascript" src="./js/admin.js"></script> -->
    <!-- <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Hello admin</h1>
        
      </div> -->
      <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->

      <!-- <h2>Total Admins</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Email</th>
              <th>Status</th>
              
            </tr>
          </thead> -->
              <!-- <tr><td>1</td>
          <td>admin</td>
          <td>admin@gmail.com</td>
          
          <td>1</td>
          
            </tr>
              -->
          
        <!-- </table>
      </div>
    </main>
  </div>
</div> -->

    

		<!-- <script src="./js/jquery.min.js"></script>
		<script src="./js/bootstrap.min.js"></script>
	<script src="./js/feather.min.js"></script>
	<script src="./js/Chart.min.js"></script>
	<script src="./js/dashboard.js"></script> -->


  