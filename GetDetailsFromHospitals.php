<?php
	session_start();
	include "Connection.php";
	
	$_SESSION['userName'] = $_GET["userName"];
	$_SESSION['password'] = $_GET["password"];
	
	$qry="SELECT AccountId FROM useraccount WHERE UserName='".$_SESSION['userName']."' AND Password='".$_SESSION['password']."'";
	$res=mysqli_query($conn,$qry);
	
	if(mysqli_num_rows($res)==1){
		$SelectHospitals="SELECT * FROM hospitals WHERE HospitalID in 
	(SELECT webuserId FROM webusers WHERE AccountId in 
	(SELECT AccountId from useraccount WHERE UserName='".$_SESSION['userName']."' and Password='".$_SESSION['password']."')) ";
	$id;
	$hosname;
	$city;
	$address;
	$tp;
	
	$Result=mysqli_query($conn,$SelectHospitals);
		if(mysqli_num_rows($Result)>0){
			while($Row=mysqli_fetch_assoc($Result)){
				$id=$Row["HospitalID"];
				$hosname=$Row["HospitalName"];
				$city=$Row["City"];
				$address=$Row["HospitalAddress"];
				$tp=$Row["TPnumber"];
			}
		}
		else{
			echo "hi";
		}
	}
	else{
		echo "Login Error";
	}
	
	
		
	//echo $id;
	//echo $hosname;
	//echo $city;
	//echo $address;
	//echo $tp;
	
?>