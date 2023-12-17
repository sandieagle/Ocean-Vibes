<!DOCTYPE html>
<html>
<head>
    <title>New Case</title>
    <style>
    	body{
    		background-image: url('Ehk8Y6.jpg');
    	}
    	.texty{
    		font-size: 20px;
    		color: white;
    	}
    	.b1{
		background-color:black;
		color: white;
		padding: 5px 10px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 20px;
		cursor: pointer;
		}
		button{
		background-color:black;
		color: white;
		padding: 5px 10px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 20px;
		cursor: pointer;
		}
    </style>
</head>
<body align="center">
	<p align="right">    <a href="contact.php" class="b1"><b>BACK</b></a></p>
    <h1>Fill this Form</h1>
    <br><br><br>
    <form action="new.php" method="post">
    	<div class="texty">
        <label for="question">Do You Have Any Question?</label><br>
        <textarea id="question" name="questions" rows="4" cols="100"></textarea><br><br>

        <label for="help_area">For Help</label><br>
        <textarea id="help_area" name="help_area" rows="4" cols="100"></textarea><br><br>
    </div>

        <div class="center">
				<button type="submit" value="SUBMIT" name="submit"><b>Submit</b></button>
			</div>
    </form>
</body>
</html>