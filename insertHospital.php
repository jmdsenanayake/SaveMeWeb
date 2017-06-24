<?php
    session_start();
	include "Connection.php";
	$hospitalName=$_GET["Hospitalname"];
	$userAccountId;
	
	//Account creation and add details to userAccounts table
	$userPassword=uniqid();
	$qry1="INSERT INTO userAccount(UserName,Password) VALUES('$hospitalName','$userPassword')";
	if (mysqli_query($conn, $qry1)) {
		echo "New record created successfully";
	} 
	else {
		echo "Error: " ;
	}
	
	$selectquery="SELECT AccountId FROM useraccount WHERE Password='".$userPassword."'";
	$res=mysqli_query($conn,$selectquery);
	if(mysqli_num_rows($res)>0){
    while($Row1=mysqli_fetch_assoc($res)){
        $userAccountId=$Row1["AccountId"];
    }
}
	
    include "insertWebAppUsers.php";
	
	
	$category=$_GET["category"];
    $address=$_GET["address"];
    $city=$_GET["city"];
    $tp=$_GET["tp"];
    $email=$_GET["email"];
    //$_SESSION['type'] = 'hospital';

//insert values to the database
	$insertQuery="INSERT INTO Hospitals(HospitalID,HospitalName,Category,HospitalAddress,City,TPnumber,email,status)
	VALUES('$webuserId','$hospitalName','$category','$address','$city','$tp','$email','pending')";
	
	if (mysqli_query($conn, $insertQuery)) {
    echo "New record created successfully";
} else {
    echo "Error: " ;
}


	
	
?>