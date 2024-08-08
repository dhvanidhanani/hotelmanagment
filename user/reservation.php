<?php
// Start session and include necessary files
session_start();
include("../include/connection.php");
include("header.php");

// Fetch the table ID from the addtable table based on the provided $id
$id = isset($_GET['id']) ? mysqli_real_escape_string($con, $_GET['id']) : null;
$table_query = "SELECT tableno, capacity FROM addtable WHERE id = '$id'";
$table_result = mysqli_query($con, $table_query);

// Check if the query was successful and if a table number and capacity were found
if ($table_result && mysqli_num_rows($table_result) > 0) {
    $table_row = mysqli_fetch_assoc($table_result);
    $table_id = $table_row['tableno'];
    $capacity = $table_row['capacity'];
} else {
    // Handle the case when no table number or capacity is found
    // For example, you can display an error message or set default values
    $table_id = "Table ID not found";
    $capacity = 0; // Set a default capacity
}
?>
<img src="../images/reservation.jpg" width="100%" height="450px">


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
	<script>
        // Function to set minimum selectable date for date picker
        function setMinDate() {
            var today = new Date();
            var dd = String(today.getDate()).padStart(2, '0');
            var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
            var yyyy = today.getFullYear();

            today = yyyy + '-' + mm + '-' + dd;

            document.getElementById("input_date").setAttribute("min", today);
        }

        // Function to populate time dropdown with AM/PM options
        function populateTimeDropdown() {
            var select = document.getElementById("time");
            for (var i = 1; i <= 12; i++) {
                var option = document.createElement("option");
                option.text = i + ":00 AM";
                select.add(option);
                var option2 = document.createElement("option");
                option2.text = i + ":30 AM";
                select.add(option2);
            }
			for (var i = 1; i <= 12; i++) {
                var option = document.createElement("option");
                option.text = i + ":00 PM";
                select.add(option);
                var option2 = document.createElement("option");
                option2.text = i + ":30 PM";
                select.add(option2);
            }
        }
        
        // Call functions when the document is loaded
        document.addEventListener('DOMContentLoaded', function() {
            setMinDate();
            populateTimeDropdown();
        });
    </script>
</head>

<body>
<form action="" method="post">

	
	<!-- Start Reservation -->
	<div class="reservation-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Reservation for <?php echo $table_id; ?></h2>
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
										
                                            <input id="input_date" class="datepicker picker__input form-control" name="date" type="date" name="date" placeholder="Select Date" required data-error="Please enter Date">
											<div class="help-block with-errors"></div>
										</div>                                 
									</div>
									<div class="col-md-12">
										<div class="form-group">
										
											<label for="time">Select Time:</label>
        									<input type="time"   id="reservation_time" name="reservation_time" required><br><br>

											<!-- <div class="help-block with-errors"></div> -->
										</div>                                 
									</div>
									<div class="col-md-12">
    <div class="form-group">
        <select class="custom-select d-block form-control" name="person" id="person" required data-error="Please select Person">
            <option disabled selected>Select Person</option>
            <?php
            // Dynamically generate the options based on the table capacity
            for ($i = $capacity; $i > 0; $i--) {
                echo "<option value='$i'>$i</option>";
            }
            ?>
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
        <input type="text" name="table_id" class="form-control" required data-error="Please enter your Numbar" value="<?php echo $table_id; ?>">
        <div class="help-block with-errors"></div>
    </div> 
</div>                            
								</div>
                             
								<!-- <input type="text" name="id" value="table id :<?php ?>"> -->

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
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $reservation_date = $_POST['date'];
    $reservation_time = $_POST['reservation_time'];
    $num_persons = $_POST['person'];
    $table_id = isset($_POST['table_id']) ? mysqli_real_escape_string($con, $_POST['table_id']) : null;

    // Calculate the start and end times for the reservation window (one hour before and after the selected time)
    $start_time = date("H:i:s", strtotime('-1 hour', strtotime($reservation_time)));
    $end_time = date("H:i:s", strtotime('+1 hour', strtotime($reservation_time)));

    // Check if there are any bookings for the same table within the reservation window
    $check_query = "SELECT * FROM reservation WHERE table_id = '$table_id' 
                    AND reservation_date = '$reservation_date' 
                    AND reservation_time >= '$start_time' 
                    AND reservation_time <= '$end_time'";
    $result = mysqli_query($con, $check_query);

    // Check if the selected time slot is within the reservation window
    if(mysqli_num_rows($result) > 0) {
        // Existing booking found within the reservation window
        echo "<script>
                alert('Sorry, the table is already booked or reserved within one hour of the specified time. Please choose a different time.');
                window.history.back();
              </script>";
    } else {
        // Perform the database insertion
        $formatted_time = date("H:i:s", strtotime($reservation_time));
        $insert_query = "INSERT INTO reservation (name, email, phone, reservation_date, reservation_time, num_persons, table_id) 
                         VALUES ('$name', '$email', '$phone', '$reservation_date', '$formatted_time', '$num_persons', '$table_id')";

        if(mysqli_query($con, $insert_query)) {
            echo "<script>
                    alert('Your table reservation has been confirmed!.');
                    window.location.href='table.php';
                  </script>";
        } else {
            echo "Error: " . $insert_query . "<br>" . mysqli_error($con);
        }
    }

    // Close the database connection
    mysqli_close($con);
}
?>



<?php include("footer.php");
?>