<html>
<head>
<title>Contact | Pawan Industries</title>
<meta charset="utf-8"/>
<meta name="description" content="Contact us | Pawan Industries "/>
<meta name="keywords" content="Weighing solution, weighing industry, weighing machine"/>
<meta name="robots" content="Pawan Industries"/>
<meta property="og:image" itemprop="image" content="images/icon.jpg">
<meta name="theme-color" content="#99ddff" />
<link rel="stylesheet" type="text/css" href="styles/style.css">
<link rel="shortcut icon" href="images/icon.jpg" />
<script>
	function validateForm() {
    var a = document.forms["feedback"]["feed_name"].value;
    if (a == "") {
        alert("Name must be filled out");
        return false;
    }
    var b = document.forms["feedback"]["feed_num"].value;
    if (b == "") {
        alert("Mobile number must be filled out");
        return false;
    }
    var c = document.forms["feedback"]["msg"].value;
    if (c == "") {
        alert("Message must be filled out");
        return false;
    }
	if (!c.replace(/\s/g, '').length) {
		alert("Message must be filled out");
        return false;
	}
}
</script>
</head>
<body>
<?php
include "header.php";
include "nav.php";
?>
<div id="container">
	<div id="contact">
	<font face="Gill Sans">
		<table>
			<tr>
				<td><b>Sudhir Kumar</b></td><td><font face="Monotype Corsiva, Apple Chancery"><em>(Managing Director)</em></font></td><td>:</td><td><b>+919416026344</b></td>
			</tr>
			<tr>
				<td><b>Akshit Aggarwal</b></td><td><font face="Monotype Corsiva, Apple Chancery"><em>(Engineer)</em></font></td><td>:</td><td><b>+919992079494</b></td>
			</tr>
		</table>
		<br>
		<table>
			<tr>
				<td><b>Address</b></td><td>:</td><td></td><td><u>PAWAN INDUSTRIES</u></td>
			</tr>
			<tr>
				<td></td><td></td><td></td><td>Opp. Housing Board Colony,<br>Naraingarh Road,<br>Ambala City - 134007<br>Haryana, India<br>Ph: +911712540344</td>
			</tr>
		</table>
	</div>
	<div id="feedback">
		<form name="feedback" method="post" action="contact.php" onsubmit="return validateForm()">
			<table>
				<tr>
					<td>Name<font color="red">*</font></td><td>:</td><td><input type="text" name="feed_name" size="40" placeholder="Name (required)" style="padding:5px 5px 5px 5px; border-radius: 3px; font-family: Gill Sans; font-size: 13px; font-weight: normal;" maxlength="35" minlength="3"></td>
				</tr>
				<tr>
					<td>Mobile<font color="red">*</font></td><td>:</td><td><input type="text" name="feed_num" size="40" placeholder="Contact number (required)" style="padding:5px 5px 5px 5px; border-radius: 3px; font-family: Gill Sans; font-size: 13px; font-weight: normal;" maxlength="15" minlength="7"></td>
				</tr>
				<tr>
					<td>Email</td><td>:</td><td><input type="email" name="feed_mail" size="40" placeholder="Email (optional)" style="padding:5px 5px 5px 5px; border-radius: 3px; font-family: Gill Sans; font-size: 13px; font-weight: normal;" maxlength="50 " minlength="7"></td>
				</tr>
				<tr>
					<td>Message<font color="red">*</font></td><td>:</td><td><textarea rows="7" cols="38" name="msg" placeholder="Your message (required)" style="padding:5px 5px 5px 5px; border-radius: 3px; border-width: 2.5px; border-bottom: none; border-right: none; border-color: #989898; font-family: Gill Sans; font-size: 13px; font-weight: normal;"></textarea></td>
				</tr>
				<tr>
					<td></td><td></td><td><input type="submit" name="submit" value="Submit" style="padding:12px 50px 12px 50px; background:#fff; border-color:#00808b; border-radius:25px; cursor:pointer; font-weight:bolder; color: #00808b; font-size: 12px;"></td>
				</tr>
			</table>
		</form>
	</div>
	</font>
	<div style="margin-left:50%; border-left:thin gray solid; height:350px;"></div>
	<div id="map"></div>
	<script>
		function myMap() {
 			var myCenter = new google.maps.LatLng(30.391488, 76.793682);
  			var mapCanvas = document.getElementById("map");
  			var mapOptions = {center: myCenter, zoom: 9};
  			var map = new google.maps.Map(mapCanvas, mapOptions);
  			var marker = new google.maps.Marker({position:myCenter});
  			marker.setMap(map);
  			var infowindow = new google.maps.InfoWindow({
    			content: "Pawan Industries"
  			});
  			infowindow.open(map,marker);
		}
	</script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBCNruZm31QvHbhVQfw1yBvGFUoFMJO_6k&callback=myMap"></script>
	</font>
</div>
<?php
if(isset($_REQUEST['submit']))
{
	$name=$_REQUEST["feed_name"];
	$num=$_REQUEST["feed_num"];
	$email=$_REQUEST["feed_mail"];
	$message=$_REQUEST["msg"];
	
    $conn = mysqli_connect('localhost', 'root', '');
    $db = mysqli_select_db($conn,"contact");
    if (!$conn) {
        die("Connection failed: couldn't connect to server...");
    }
    $sql = "INSERT INTO feedback(name,number,email,message) VALUES ('$name','$num','$email','$message')";
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Thanks for your feedback')</script>";
    } 
    else {
        echo "<script>alert('Oops! We got an error please submit your feedback again...')</script>";
    }
    mysqli_close($conn);
}
include "footer.php";
?>
</body>
</html>