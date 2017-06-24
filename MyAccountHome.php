<!DOCTYPE html>
<html>
<title>SaveMe</title>
<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="css/notifications.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
/* Set the width of the sidebar to 120px */
.w3-sidebar {width: 120px;background: #222;}
/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
#main {margin-left: 120px}
/* Remove margins from "page content" on small screens */
@media only screen and (max-width: 600px) {#main {margin-left: 0}}
    #rightpic {
background-position: top right;
height : 133px;
padding : 0;
width: 138px;
float: right;

}
  
hr {
    display: block;
    height: 1px;
    border: 0;
    border-top: 1px solid #ccc;
    margin: 1em 0;
    padding: 0;
    width:100%
}
    


input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: darkblue;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 50%;
    text-align:center;
    border-radius: 8px;
    
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 20%;
    border-radius: 30%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
  
    


.glyphicon {  margin-bottom: 10px;margin-right: 10px;}

small {
display: block;
line-height: 1.428571429;
color: #999;
}

</style>
<body class="w3-black">

<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
  <!-- Avatar image in top left corner -->
  

  <a href="#" class="w3-bar-item w3-button w3-padding-large w3-black">
    
      
    <p>Home</p>
  </a>
    
    
    <a href="MyAccountNotifications.html" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
     <img src="images/noti.png" style="width:100%">
      <br><br>
    <p>Notifiactions</p>
  </a>
  <a href="MyAccountHistory.html" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    
    <p>History</p>
  </a>
  <a href="MyAccountReports.html" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    
    <p>Generate Reports</p>
  </a>
  <a href="Register%20hospitals.html" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    
    <p>Edit Hospital Details</p>
  </a>
  
</nav>




<?php
	include "GetDetailsFromHospitals.php";
?>
  <!-- Contact Section -->
  <div class="w3-padding-16 w3-content w3-text-grey" id="contact">
       
      <div class="row">
          
        <div class="col-sm-8">
            <br><br>
            <h2 class="w3-text-light-grey"><?php echo $hosname?> - <?php echo $city?></h2>
        </div>
       
        <div class="col-sm-4">
           <img id="rightpic" src="images/save.png"> 
        </div>    
      </div>
   <div class="row"> 
    <div class="col-sm-12">
    <hr>
    </div>
    </div>
      
     <div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-12">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-md-8">
                       <img src="images/hospital.jpg" width="100%" > 
                    </div>
                    <div class="col-md-4">
                        <h4>
                            <?php echo $hosname?></h4>
                        <small><cite title="San Francisco, USA"><?php echo $address?><i class="glyphicon glyphicon-map-marker">
                        </i></cite></small>
                        <p>
                            
                            <br />
                            <i class="glyphicon glyphicon-globe"></i><a href="http://www.nhsl.health.gov.lk/web/index.php?lang=en">General Hospital Website</a>
                            <br />
                            <i class="glyphicon glyphicon-gift"></i> <?php echo $tp?> </p>
                        <!-- Split button -->
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
  </div>
    
    <!-- End Contact Section -->

    <!-- Footer -->
  



</body>
</html>
