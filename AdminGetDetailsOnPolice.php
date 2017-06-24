<?php
    include "Connection.php";
    //$type=$_GET["type"];
    
    $SelectQuery="SELECT Name,City,email FROM Police WHERE status='pending'";
    $Result=mysqli_query($conn,$SelectQuery);
		if(mysqli_num_rows($Result)>0){
            
            echo'
            
            <table>
                <tr>
                <th>Name</th>
                <th>City</th>
                <th>E-mail</th>
                <th>Confirmation</th>
                </tr>';
        
		while($Row=mysqli_fetch_assoc($Result)){
			//echo'<a onclick="showRSS(this.innerHTML)" class="w3-bar-item w3-button w3-hover-white">'.$Row["SiteName"].'</a>';
            echo'
                <tr>
                <td>'.$Row["Name"].'</td>
                <td>'.$Row["City"].'</td>
                <td>'.$Row["email"].'</td>
                 <td><input type="button" onclick="sendMail(\''.$Row["Name"].'\',\''.$Row["email"].'\');" value="Confirm">&nbsp;&nbsp;<input type="button" value="View Details"></td>
            </tr>';
            
		}
        
         echo '</table>';
        }
            
            
?>