<?php
// Start session and include necessary files
session_start();
include("../include/connection.php");
include("header.php");

// Check if the id parameter is set in the URL
if(isset($_GET['id'])) {
    // Sanitize the id value
    $id = mysqli_real_escape_string($con, $_GET['id']);
} else {
    // Handle the case when id is not set
    // You can redirect the user or display an error message
    echo "Error: ID parameter is missing.";
    // You can redirect the user or display an error message
}

// Debugging: Check the value of $id
echo "ID: " . $id;

// Rest of your code for reservations.php
// You can use $id wherever you need to use the id in this file

?>


<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Live Dinner Restaurant - Responsive HTML5 Template</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">    
	<!-- Site CSS -->
    <link rel="stylesheet" href="../css/style.css">    
	<!-- Pickadate CSS -->
    <link rel="stylesheet" href="../css/classic.css">    
	<link rel="stylesheet" href="../css/classic.date.css">    
	<link rel="stylesheet" href="../css/classic.time.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="../css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/custom.css">
    <!-- Pickadate CSS -->
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pikaday/css/pikaday.css"> -->
<!-- Pickatime CSS -->
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pickatime/lib/themes/default.css"> -->
<!-- Pickadate JavaScript -->
<!-- <script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js"></script> -->
<!-- Pickatime JavaScript -->
<!-- <script src="https://cdn.jsdelivr.net/npm/pickatime/lib/picker.js"></script>
<script src="https://cdn.jsdelivr.net/npm/pickatime/lib/picker.time.js"></script> -->
<!-- Pickadate JavaScript -->
<!-- <script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize Pickadate.js for date picker
    var datepicker = new Pikaday({
        field: document.getElementById('input_date'),
        format: 'YYYY-MM-DD', // Adjust the format as needed
        minDate: new Date(), // Set minimum selectable date to today
        onSelect: function(selectedDate) {
            // Update the minDate of the timepicker to the selected date
            timepicker.setMin(new Date(selectedDate));
        }
    });

    Initialize Pickatime.js for time picker
    var timepicker = new Picker(document.getElementById('input_time'), {
        format: 'HH:mm', // Adjust the format as needed
        headers: false,
        increment: 15, // Adjust the time increment as needed
    });
});
</script> -->


    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<form action="" method="post">
	
	<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Reservation</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
	
	<!-- Start Reservation -->
	<div class="reservation-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Reservation for <?php echo $id; ?></h2>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-sm-12 col-xs-12">
					<div class="contact-block">
						<form id="contactForm">
							<div class="row">
								<div class="col-md-6">
									<h3>Book a table</h3>
									<div class="col-md-12">
										<div class="form-group">
											<!-- <input id="input_date" class="datepicker picker__input form-control" name="date" type="text" value="" equired data-error="Please enter Date"> -->
                                            <input id="input_date" class="datepicker picker__input form-control" name="date" type="date" name="date" placeholder="Select Date" required data-error="Please enter Date">
											<div class="help-block with-errors"></div>
										</div>                                 
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<!-- <input id="input_time" class="time form-control picker__input" required data-error="Please enter time"> -->
                                            <!-- <input id="input_time" class="time form-control picker__input" name="time" type="text" placeholder="Select Time" required data-error="Please enter Time"> -->
                                            <select class="custom-select d-block form-control" name="time" id="time" required data-error="Please select time">
											  <option disabled selected>Select Time</option>
											  <option value="1">7:00 PM</option>
											  <option value="2">8:00 PM</option>
											  <option value="3">9:00 PM</option>
											  <option value="4">10:00 PM</option>
											  <option value="5">11:00 PM</option>
											</select>
											<div class="help-block with-errors"></div>
										</div>                                 
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<select class="custom-select d-block form-control" name="person" id="person" required data-error="Please select Person">
											  <option disabled selected>Select Person   </option>
											  <option value="1">1</option>
											  <option value="2">2</option>
											  <option value="3">3</option>
											  <option value="4">4</option>
											  <option value="5">5</option>
											  <option value="6">6</option>
											  <option value="7">7</option>
											</select>
											<div class="help-block with-errors"></div>
										</div> 
									</div>
								</div>
								<div class="col-md-6">
									<h3>Contact Details</h3>
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" class="form-control" name="name" id="name" placeholder="Your Name" required data-error="Please enter your name">
											<div class="help-block with-errors"></div>
										</div>                                 
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" placeholder="Your Email" name="email" id="email" class="form-control" name="email" required data-error="Please enter your email">
											<div class="help-block with-errors"></div>
										</div> 
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" placeholder="Your Numbar" name="phone" id="phone" class="form-control" name="phone" required data-error="Please enter your Numbar">
											<div class="help-block with-errors"></div>
										</div> 
									</div>
									 
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" placeholder="Your Numbar" name="table_id" class="form-control" required data-error="Please enter your Numbar" value="table id :<?php echo $id; ?>">
											<div class="help-block with-errors"></div>
										</div> 
									</div>                              
								</div>
								<!-- <input type="text" name="id" value="table id :<?php echo $id; ?>"> -->

								</div>
								<div class="col-md-12">
									<div class="submit-button text-center">
										<button class="btn btn-common" id="submit" name="book" type="submit">Book Table</button>
										<div id="msgSubmit" class="h3 text-center hidden"></div> 
										<div class="clearfix"></div> 
									</div>
								</div>
							</div>            
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- End Reservation -->
	
    </form>
</body>



<?php

if(isset($_POST['book'])) {
    // Sanitize and retrieve form data
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $reservation_date = mysqli_real_escape_string($con, $_POST['date']);
    $reservation_time = mysqli_real_escape_string($con, $_POST['time']);
    $num_persons = mysqli_real_escape_string($con, $_POST['person']);
    $table_id = mysqli_real_escape_string($con, $_POST['table_id']); // Retrieve the table_id from the form

    // Format the time to HH:MM:SS
    $formatted_time = date("H:i:s", strtotime($reservation_time));

    // Insert reservation data into the database
    $query = "INSERT INTO reservations (name, email, phone, reservation_date, reservation_time, num_persons, table_id) 
              VALUES ('$name', '$email', '$phone', '$reservation_date', '$formatted_time', '$num_persons', '$table_id')";

    if(mysqli_query($con, $query)) {
        // Redirect the user after successful reservation
        header("Location: viewtable.php");
        exit(); // Terminate script execution after redirect
    } else {
        // Handle the case of an error
        echo "Error: " . $query . "<br>" . mysqli_error($con);
    }
}


include("footer.php");
?>


