<?php 
//mindful eats 

//Database connection 
$connection = mysqli_connect('localhost', 'root', '', 'mindful_eats');

//Error check
if( mysqli_connect_errno() ){
	$error_message = mysqli_connect_error();
	die("Database connection failed: " . $error_message );
}

//Initialize Variables 
$client_name = '';
$client_email = '';
$client_phone = '';
$client_address = '';
$client_message = '';

//Check for form submission 
if (isset($_POST['submit'])) {
	//Get Form Data
	$client_name = $_POST['client_name'];
	$client_email = $_POST['client_email'];
	$client_phone = $_POST['client_phone'];
	$client_address = $_POST['client_address'];
	$client_message = $_POST['client_message'];

	//Create query statement 
	$query_string = "INSERT INTO mindful_eats (client_name , client_email, client_phone, client_address, client_message) 
						VALUES ('$client_name' , '$client_email', '$client_phone', '$client_address', '$client_message')";

	//Execute Query 
	$result = mysqli_query($connection, $query_string);

	//Check for errors
	if($result){
		echo "Your information has been successfully submitted.";
	} else {
		echo "There has been an error. Please try again.";
	}

	//Close the connection
	mysqli_close($connection);

}

?>
<html>
<head>
	<title>Mindful Eats</title>
</head>
<body>
	<h1>Mindful Eats</h1>

	<form action="mindful_eats.php" method="post">
		<p>
			<label for="name">Name:</label>
			<input type="text" name="client_name" id="name" value="<?php echo $client_name; ?>" >
		</p>
		<p>
			<label for="email">Email:</label>
			<input type="text" name="client_email" id="email" value="<?php echo $client_email; ?>" >
		</p>
		<p>
			<label for="phone">Phone:</label>
			<input type="text" name="client_phone" id="phone" value="<?php echo $client_phone; ?>" >
		</p>
		<p>
			<label for="address">Address:</label>
			<textarea name="client_address" id="address"  cols="30" rows="10" ><?php echo $client_address; ?></textarea>
		</p>
		<p>
			<label for="message">Message:</label>
			<textarea name="client_message" id="message"  cols="30" rows="10" ><?php echo $client_message; ?></textarea>
		</p>
		<input type="submit" name="submit" value="Submit">
	</form>

</body>

</html>