<?php
    include "Connection.php";
    $type=$_GET["type"];
    $name=$_GET["name"];
    $email=$_GET["email"];

    if($type=="Hospitals"){
        $updateQuery="UPDATE `hospitals` SET `status` = 'confirmed' WHERE `HospitalName` ='".$name."' AND  `email`='".$email."'";
        mysqli_query($conn,$updateQuery);
    }
    else if($type=="Police Stations"){
        $updateQuery="UPDATE `police` SET `status` = 'confirmed' WHERE `HospitalName` ='".$name."' AND  `email`='".$email."'";
        mysqli_query($conn,$updateQuery);
    }
    else if($type=="Fire Brigade"){
         $updateQuery="UPDATE `firebrigade` SET `status` = 'confirmed' WHERE `HospitalName` ='".$name."' AND  `email`='".$email."'";
        mysqli_query($conn,$updateQuery);
    }
?>