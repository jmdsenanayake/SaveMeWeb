<?php
	include "Connection.php";
	$accId=$_GET["accId"];
	$latitude;
	$longitude;
	//echo $accId;
	 $SelectQuery="SELECT Latitude,Longitude FROM accidents WHERE AccidentID='".$accId."'";
    $Result=mysqli_query($conn,$SelectQuery);
		if(mysqli_num_rows($Result)>0){
			while($Row=mysqli_fetch_assoc($Result)){
			//echo'<a onclick="showRSS(this.innerHTML)" class="w3-bar-item w3-button w3-hover-white">'.$Row["SiteName"].'</a>';
				$latitude=$Row["Latitude"];
				$longitude=$Row["Longitude"];
				
				//echo $latitude;
				//echo $longitude;
			}
        }
		
?>