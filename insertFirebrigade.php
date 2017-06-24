<?php
	session_start();
	include "Connection.php";
    include "insertWebAppUsers.php";
	
	$fbName=$_GET["fbname"];
    $address=$_GET["address"];
    $city=$_GET["city"];
    $tp=$_GET["tp"];
    $email=$_GET["email"];
    $_SESSION['type'] = 'firebrigade';

//insert values to the database
	$insertQuery="INSERT INTO FireBrigade(FireBrigadeID,Name,Address,City,tpNumber,email,status)
	VALUES('$webuserId','$fbName','$address','$city','$tp','$email','pending')";
	
	if (mysqli_query($conn, $insertQuery)) {
    echo "New record created successfully";
} else {
    echo "Error: " ;
}
?>