<?php
    session_start();
	include "Connection.php";
    include "insertWebAppUsers.php";
	
	$policeName=$_GET["policename"];
    $address=$_GET["address"];
    $city=$_GET["city"];
    $tp=$_GET["tp"];
    $email=$_GET["email"];
    $_SESSION['type'] = 'police';


//insert values to the database
	$insertQuery="INSERT INTO Police(PoliceID,Name,Address,City,TPnumber,email,status)
	VALUES('$webuserId','$policeName','$address','$city','$tp','$email','pending')";
	
	if (mysqli_query($conn, $insertQuery)) {
    echo "New record created successfully";
} else {
    echo "Error: " ;
}
?>