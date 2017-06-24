<?php
//this is not working
	include "Connection.php";
	$accId=$_GET["accId"];
	
	$updateQuery="UPDATE accidents SET AccidentStatus = 'done' WHERE AccidentID='".$accId."'";
        mysqli_query($conn,$updateQuery);
?>