<?php 
include 'connection.php';

if(isset($_POST['submit'])){

	$fullname = strip_tags($_POST['fullname']);
	$matricNumber= strip_tags($_POST['matricNumber']);
	$phoneNumber= strip_tags($_POST['phoneNumber']);
	

		$query = "INSERT INTO users(fullname, matricNumber, phoneNumber) VALUES('$fullname', '$matricNumber', '$phoneNumber' )";

		if ($connect->query($query)) {

			echo "<div style='background-color:green;color:white;text-align:center; padding: 7px'>Record submitted successfully</div>";

		}else {
			echo "<div style='background-color:red;color:white;text-align:center;padding: 7x'>Error occured while submitting your information. Please try again</div>";
		}

	}

	$connect->close();
?>
