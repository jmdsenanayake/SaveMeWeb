<?php
	include "Connection.php";
	$SelectQuery="SELECT AccidentID,AccidentDateTime,AccidentType,NearestCity,Details FROM accidents WHERE AccidentStatus='inprogress' ORDER BY AccidentDateTime DESC";
	$Result=mysqli_query($conn,$SelectQuery);
	
		if(mysqli_num_rows($Result)>0){
            
            echo'
            
            <table>
                <tr>
                <th>Date and Time</th>
				<th>Accident Type</th>
                <th>Nearest City</th>
                <th>Details</th>
                <th>Status</th>
                </tr>';
        
		while($Row=mysqli_fetch_assoc($Result)){
            echo'
                <tr>
                <td>'.$Row["AccidentDateTime"].'</td>
                <td>'.$Row["AccidentType"].'</td>
                <td>'.$Row["NearestCity"].'</td>
                <td>'.$Row["Details"].'</td>
				<td><input type="button" onclick="getAccidentLocation(\''.$Row["AccidentID"].'\');" value="View">&nbsp&nbsp<input type="button" onclick="updateTable(\''.$Row["AccidentID"].'\');" value="Change Status"></td>
            </tr>';
            
		}
        
         echo '</table>';
        }
?>