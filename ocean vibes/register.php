<html>
<head>
	<title>Registration</title>
	<style>	
	body{
		background-color:#66ffcc;
	}
	.im{
		padding-right:150px;
	}
	.p1{
		font-family: Garamond;
		line-height:25pt;
		text-align:center;
	}
	.button {
	  font-family: Garamond;
	  background-color: #004d00;
	  border: solid black 2px;
	  color: white;
	  padding-top:1px;
	  padding-bottom:1px;
	  padding-right:5px;
	  padding-left:5px;
	  text-align: center;
	  text-decoration: none;
	  display: inline-block;
	  font-size: 15px;
	  cursor: pointer;
	}
	.lower{
		position: absolute;
		background-color:black;
		width:99%;
		height:50px;
	}
	header {
    
   background-size: 40% 100%;
    color: black;
    text-align: center;
    padding: 15px 0;
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
	</style>
</head>
<body>
	<header>
        <nav>
            <ul>
                <li>
                <div class="navbar">
                  <img src="Ocean_Group_Logo.jpg" id="logo" align="left" height="50px" width="120px">                  
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
	<br>
	<img src="surfboard-surfer-surfing-surf.jpg" width="1494" height="325"><br>
	<div class="p1">
	<br><p>We take you to the best surf spots on the island bt land or boat,<br>always 
	searching for the best surf spot regarding on the swell and wind direction for that 
	specific day.<br>And on the way we show you some amazing beautiful places on the island!<br>
	Depending on your experience, we choose the best spots where you can feel more 
	comfortable surfing.<br>We also have available photo and video service upon request, so you can 
	be photographed and/or filmed during your surf session,<br>for this special moment to stay with you forever.</p>
	<form action="res.php" method="POST">
	<table align="center">
		<tr>
			<td align="center">
			<div class="im">
				Name*<br><input type="text" name="name"><br>
				Email*<br><input type="text" name="email">
			</div>
			</td>
			<td align="center">Age*<br><input type="text" name="age"><br>
			contact number*<br><input type="text" name="contact"></td>
		</tr>
	</table>
	<table align="center">
		<tr>
			<td align="left">Message*<br><textarea rows="2" cols="50" name="msg"></textarea><br>
			<input type="radio" name="agree">I agree that my submitted data is being collected and stored.</td>
		</tr>
	</table>
	<button type="submit" value="SUBMIT" name="submit">SEND MESSAGE</button></p>
	<pre><a href="firstpage.php" class="button">HOME</a>    <a href="gallery.php" class="button">BACK</a></pre><br><br><br><br>
	</form>
	<div class="lower">
		<table align="center">
		<tr>
			<td><p align="center"><img src="135858_3191035_426502_image.png" height="45px" width="50px"></p><td>
			<td><p align="center"><img src="logoSegurosMutua.jpg" height="45px" width="50px"></p><td>
			<td><p align="center"><img src="pngtree-circle-logo-100-natural-vector-png-image_6730614.png" height="45px" width="50px"></p><td>
			<td><p align="center"><img src="1600px_COLOURBOX13735186.jpg" height="45px" width="50px"></p><td>
		</tr>
		</table>
	</div>
</body>
</html>