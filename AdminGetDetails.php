<?php
    include "Connection.php";
    
    $SelectQuery="SELECT HospitalName,City,email FROM Hospitals WHERE status='pending'";
    $Result=mysqli_query($conn,$SelectQuery);
		if(mysqli_num_rows($Result)>0){
            
            echo'
            
            <table>
                <tr>
                <th>Name</th>
                <th>Address</th>
                <th>E-mail</th>
                <th>Confirmation</th>
                </tr>';
        
		while($Row=mysqli_fetch_assoc($Result)){
            echo'
                <tr>
                <td>'.$Row["HospitalName"].'</td>
                <td>'.$Row["City"].'</td>
                <td>'.$Row["email"].'</td>
                <td><input type="button" onclick="" value="Confirm">&nbsp;&nbsp;<input type="button" value="View Details"></td>
            </tr>';
			//sendMail(\''.$Row["HospitalName"].'\',\''.$Row["email"].'\');
            
		}
        
         echo '</table>';
        }
            
            
?>