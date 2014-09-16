<?php
	session_start();
	include ("FixedBitNotation.php");
	include ("GoogleAuthenticator.php");
	$Auth = new GAuthen();
	
?>
	
	<a href="Setup.php">Setup</a> | <a href="index.php">Main</a>
	
	<br><br><br><br>
	
	Please Enter Your Six Digit Code From Google Authenticator
	
	<form action="Authenticate.php" method="POST">
	<input type="text" name="Code"><br>
	<input type="submit" name="Submit" value="Submit">
	</form>
