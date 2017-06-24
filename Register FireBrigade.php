<!DOCTYPE html>
<html>
<title>SaveMe</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
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
</style>
<body class="w3-black" onload="showMessage()">
<?php
	session_start();
	$_SESSION['type']="firebrigade";
?>


<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
  <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
    <a href="#" class="w3-bar-item w3-button" style="width:25% !important">REGISTER HOSPITALS</a>
    <a href="#about" class="w3-bar-item w3-button" style="width:25% !important">REGISTER POLICE STATIONS</a>
    <a href="#photos" class="w3-bar-item w3-button" style="width:25% !important">REGISTER FIRE BRIGADE</a>
    <a href="#contact" class="w3-bar-item w3-button" style="width:25% !important">ADMIN</a>
  </div>
</div>



  <!-- Contact Section -->
  <div class="w3-padding-16 w3-content w3-text-grey" id="contact">
       <span></span>
      <div class="row">
          
        <div class="col-sm-8">
            <br><br>
            <h2 class="w3-text-light-grey">Fire Brigade Registration</h2>
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
      
      <div class="row">
          <div class="col-md-8">
            <form name="registerForm">
            <p><input class="w3-input w3-padding-16" type="text" placeholder="Name of the Fire Brigade" required name="name" id="name" ></p>
            <p><textarea class="w3-input w3-padding-16" type="text" placeholder="Address" required name="address" id="address"></textarea></p>
            <p><input class="w3-input w3-padding-16" type="text" placeholder="Nearest City" required name="city" id="city"></p>
            <p><input class="w3-input w3-padding-16" type="text" placeholder="Telephone Number" required name="tp" id="tp"></p>
            <p><input class="w3-input w3-padding-16" type="text" placeholder="E-mail" required name="email" id="email"></p>
            <div class="row">
                    <div class="col-md-4">
                <button class="w3-button w3-light-grey w3-padding-large" type="button" onclick="addInfo()">
                <i class="fa fa-paper-plane" ></i> SAVE
                </button></div>
                    <div class="col-md-4">
                    <button class="w3-button w3-light-grey w3-padding-large" type="submit">
                    <i class="fa fa-paper-plane"></i> EDIT
                        </button></div>
                     <div class="col-md-4">           
                    <button class="w3-button w3-light-grey w3-padding-large" type="submit">
                    <i class="fa fa-paper-plane"></i> DELETE
                         </button></div>
                    
                
               
                    </div>
             
            
            </form>
          </div>
          <div class="col-md-4" style="background-color:#ccc; font-size:20px; color:red;">
              <p><center>Pending Approval...</center></p>
              <br>
              
              <br>
              <div id="msg">
                  <p style="color:black; font-size:15px; text-align:center">Successfully sent the request.<br><br><br>Please wait until you get the approval e-mail.</p></div>
              
              
          </div>
      
      </div>
    
  <!-- End Contact Section -->
  </div>
    
    <script>
        function addInfo(){
            var name=document.getElementById('name').value;
            var address=document.getElementById('address').value;
            var city=document.getElementById("city").value;
            var tp=document.getElementById('tp').value;
            var email=document.getElementById('email').value;
            
            var xmlhttp=new XMLHttpRequest();
   
            xmlhttp.onreadystatechange=function() {
                if (this.readyState==4 && this.status==200) {
		              console.log(this.responseText);
                }
            }
            
             var x1 = document.forms["registerForm"]["name"].value;
             var x3 = document.forms["registerForm"]["address"].value;
             var x4 = document.forms["registerForm"]["city"].value;
             var x5 = document.forms["registerForm"]["tp"].value;
             var x6 = document.forms["registerForm"]["email"].value;
            
            console.log(x1);
                if (x1== "") {
                    alert("Firebrigade name must be filled out");
                    return false;
                
                }
                
                else if(x3==""){
                    alert("Firebrigade address must be filled out");
                    return false;
                }
                else if(x4==""){
                    alert("City must be filled out");
                    return false;
                }
                else if(x5==""){
                    alert("Police tp number must be filled out");
                    return false;
                }
                else if(x6==""){
                    alert("Police email must be filled out");
                    return false;
                }
                else{
                    xmlhttp.open("GET","insertFirebrigade.php?fbname="+name+"&address="+address+"&city="+city+"&tp="+tp+"&email="+email,true);
 
                    xmlhttp.send();
                    
                    showMessage();
            }
            
            
            
            document.getElementById('name').value="";
            document.getElementById('address').value="";
            document.getElementById("city").value="";
            document.getElementById('tp').value="";
            document.getElementById('email').value="";
            
            
        }
        
        
        function showMessage(){
            var x = document.getElementById('msg');
            if (x.style.display === 'none') {
                x.style.display = 'block';
            } 
            else {
                x.style.display = 'none';
             }
        }
        
        
    </script>
  
    <!-- Footer -->
  



</body>
</html>
