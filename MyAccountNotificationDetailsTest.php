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
    

</style>
<body class="w3-black">
<?php
	include "GetGoogleMaps.php";
?>

<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
  <!-- Avatar image in top left corner -->
  

  <a href="#" class="w3-bar-item w3-button w3-padding-large w3-black">
    
      
    <p>Home</p>
  </a>
    
    
    <a href="Register%20police.html" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
     <img src="images/noti.png" style="width:100%">
      <br><br>
    <p>Notifiactions</p>
  </a>
  <a href="Register%20police.html" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    
    <p>History</p>
  </a>
  <a href="Register%20FireBrigade.html" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    
    <p>Generate Reports</p>
  </a>
  <a href="Admin.html" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    
    <p>Update Account</p>
  </a>
  
</nav>





  <!-- Contact Section -->
  <div class="w3-padding-16 w3-content w3-text-grey" id="contact">
       <span></span>
      <div class="row">
          
        <div class="col-sm-8">
            <br><br>
            <h2 class="w3-text-light-grey">General Hospital - Colombo</h2>
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
      
      <div id="googleMap" style="width:100%;height:450px" align="center"></div>
    <script>
        function myMap() {
            /*var mapProp= {
            center:new google.maps.LatLng(6.919090, 79.867995),
            zoom:18,
        };
            var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);*/
            
            var place1 = {
		info: '<strong><style:color="red">Accident</strong></style><br>\
					Bike and a lorry<br>\
                    3 people were injured<br>\
					<a href="https://www.google.lk/maps/dir/6.919080,+79.868005/6.872916,+79.888634">Get Directions</a>'
					,
		lat:<?php echo $latitude?>,
		long: <?php echo $longitude?>
	};

	var place2 = {
		info: '<strong>General Hospital</strong><br>\
					Colombo<br>\
					<a href="https://www.google.lk/maps/place/National+Hospital+of+Sri+Lanka/@6.9190797,79.8658167,17z/data=!3m1!4b1!4m5!3m4!1s0x3ae25974a6da7a21:0xc36d11c34834f645!8m2!3d6.9190797!4d79.8680054">Location</a>',
		lat: 6.919080,
		long: 79.868005
	};

	/*var Ragama= {
		info: '<strong>Ragama Hospital</strong><br>\r\
					North Colombo<br>\
					<a href="https://www.google.com/maps/dir/Kadawatha,+Sri+Lanka/Colombo+North+Teaching+Hospital+-+Ragama,+Hospital+Inner+Road,+Ragama+11010,+Sri+Lanka/@7.0148185,79.9197535,14z/data=!3m1!4b1!4m13!4m12!1m5!1m1!1s0x3ae2f86bd75870f7:0xee362e29dbc079a6!2m2!1d79.9498711!2d7.0014175!1m5!1m1!1s0x3ae2f9d37fd76ad7:0x2b3da3bac3b70d15!2m2!1d79.9235161!2d7.0284678">Get Directions</a>',
		lat:7.028468,
		long: 79.923516
	};*/

	var locations = [
      [place1.info, place1.lat, place1.long, 0],
      [place2.info, place2.lat, place2.long, 1],
      //[Ragama.info, Ragama.lat, Ragama.long, 2],
    ];

	var map = new google.maps.Map(document.getElementById('googleMap'), {
		zoom: 12,
		center: new google.maps.LatLng(<?php echo $latitude?>, <?php echo $longitude?>),//6.989611, 79.973823
		mapTypeId: google.maps.MapTypeId.ROADMAP
	});

	var infowindow = new google.maps.InfoWindow({});

	var marker, i;

	for (i = 0; i < locations.length; i++) {
		marker = new google.maps.Marker({
			position: new google.maps.LatLng(locations[i][1], locations[i][2]),
			map: map
		});

		google.maps.event.addListener(marker, 'click', (function (marker, i) {
			return function () {
				infowindow.setContent(locations[i][0]);
				infowindow.open(map, marker);
			}
		})(marker, i));
	}
        }
</script>
    
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDEU4pn1-iJlJLf1CQA7EbdMd_QKIGEbBg&callback=myMap"></script>
  
    
  </div>
    
    <!-- End Contact Section -->

    <!-- Footer -->
  



</body>
</html>
