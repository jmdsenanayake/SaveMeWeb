<?php
session_start();
include "Connection.php";
//include "insertHospital.php";

$type=$_SESSION['type'];
$webuserId;
echo $type;
$query="INSERT INTO webusers(type,AccountId)  values ('$type','$userAccountId')";
echo "query ok";
mysqli_query($conn,$query);

$query2="SELECT webuserId FROM webusers WHERE type='".$type."' ORDER BY webuserId DESC LIMIT 1";
$result=mysqli_query($conn,$query2);
session_unset;

if(mysqli_num_rows($result)>0){
    while($Row=mysqli_fetch_assoc($result)){
        $webuserId=$Row["webuserId"];
    }
}
echo $webuserId;
?>