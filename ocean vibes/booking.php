<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
    <link rel="stylesheet" href="styles.css">
	<link rel="stylesheet" href="styles2.css">
    <script src="script.js" defer></script>
	
    <title>We Tours</title>
	<link rel = "icon" href ="1696044905131.png" type = "image/x-icon">
	
	<script>
		function validateName(fname){
			if(fname==""){
				alert("You must enter your name to this form");
				return false;
			}
			return true;
		}
		function validateEmail(femail){
			var mailformat = /^\w+([\.-]?\w+)@\w+([\.-]?\w+)(\.\w{2,3})+$/;
			if(femail.value.match(mailformat)){
				return true;
			}
			else{
				alert("You have entered an invalid email address!");
				return false;
			}
		}
		function validateNic(fnic){
			if(fnic==""){
				alert("You must enter your nic to this form");
				return false;
			}
			return true;
		}
		function validateForm(resthousebookForm){
			var nameVal = validateName(resthousebookForm.name);		
			var emailVal = validateEmail(resthousebookForm.email);
			var nicVal = validateNic(resthousebookForm.nic);
			if(nameVal && emailVal && nicVal){
				return true;
			}
			return false;
		}
	</script>
	<style>
		.lower{
		position: absolute;
		background-color:black;
		width:99%;
		height:70px;
	}
		header {
    
   background-size: 40% 100%;
    color: black;
    text-align: center;
    padding: 0 0;
	font-size: 30px;
}
nav ul {
    list-style-type: none;
    padding: 0;
	text-align: right;
}
nav ul li {
    display: inline;
    margin-right: 20px;
}
.navbar {
  overflow: hidden;
  background-color: #333;
  position: fixed;
  top: 0;
  width: 100%;
}
.navbar a {
  float: right;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 20px;
}
.navbar a:hover {
  background: #f1f1f1;
  color: black;
}
.navbar a.active {
  background-color: #04AA6D;
  color: white;
}
h2{
	font-size: 45px;
}
	</style>
	
</head>
<body>
    <header>
        <nav>
            <ul>
                <li>
                <div class="navbar">
                  <img src="Ocean_Group_Logo.jpg" id="logo" align="left" height="58px" width="120px">                  
                  <a href="contact.php">Contact</a>
                  <a href="package.php">Package</a>
                  <a href="register.php">Registration</a>
                  <a href="gallery.php">Gallery</a>
                  <a href="intro.php">Introduction</a>
                  <a href="firstpage.php" class="active">Home</a>                  
                </div>
                </li>
            </ul>
        </nav>
</header>

    <main>
		<table>
		<tr>
			<td>
			<h2 align="center">Book a Room</h2>
			
		<form method="POST" action="book.php">
			<label for="nic">Name:</label>
			<input type="text" id="name" name="name" required><br>
			
			<label for="nic">NIC:</label>
			<input type="text" id="nic" name="nic" required><br>
			
			<label for="email">Email:</label>
			<input type="email" id="email" name="email" required><br>

			<label for="restHouse">Select a Rest House:</label>
			<select id="restHouse" name="restHouse" required>
				<option value="Rest House 1">Rest House 1</option>
				<option value="Rest House 2">Rest House 2</option>
				<option value="Rest House 1">Rest House 3</option>
				<option value="Rest House 2">Rest House 4</option>
				<option value="Rest House 1">Rest House 5</option>
			</select><br>

			<label for="checkIn">Check-In Date:</label>
			<input type="date" id="checkIn" name="checkIn" required><br>

			<label for="checkOut">Check-Out Date:</label>
			<input type="date" id="checkOut" name="checkOut" required><br>
								
			<div class="center">
				<button type="submit" value="SUBMIT" name="submit">Book Now</button>
			</div>
			</form>
			</td>
		</tr>
		</table>
    </main>
	<br><br><br>
	
	<div class="lower">
		<p align="center"><img src="135858_3191035_426502_image.png" height="45px" width="50px">
		<img src="logoSegurosMutua.jpg" height="45px" width="50px">
		<img src="pngtree-circle-logo-100-natural-vector-png-image_6730614.png" height="45px" width="50px">
		<img src="1600px_COLOURBOX13735186.jpg" height="45px" width="50px"></p>
	</div>
	
</body>
</html>