<?php

 header("X-XXS-Protection: 0");

// $con = mysqli_connect('localhost', 'root', '');

// if(!$con){
	
// 	die("Sorry, Couldn't Connect To Server!");
// }

// $db = mysqli_select_db($con, 'mycv');

// if(!$db){

// 	die("Sorry, Couldn't Open the Database");
// }
include('config.php');

if(isset($_POST['contact'])){

	$name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
	$email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
	$phone = htmlspecialchars($_POST['phone'], ENT_QUOTES, 'UTF-8');
	$message = htmlspecialchars($_POST['message'], ENT_QUOTES, 'UTF-8');

	if(empty($name) || empty($email) || empty($phone) || empty($message)){
	
		header('location: ../index.php');
		exit();
	}	

	$query = "INSERT into contact(name,email,phone,message) values('$name','$email','$phone', '$message')";

	$run = mysqli_query($conn, $query);

	if($run){
		header('location: ../index.php#contact');
		//echo 'Your message has been sent. Thank you!';
	}
}


?>