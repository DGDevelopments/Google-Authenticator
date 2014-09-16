<?php
	session_start();
	include ("FixedBitNotation.php");
	include ("GoogleAuthenticator.php");
	$Auth = new GAuthen();
	
	if (!isset($_POST['Submit'])){
		header("Location: index.php");
		exit;
	}

	echo $_SESSION['SecretCode']; 
	echo "<br><bR>";
	echo $_POST['Code'];
	echo "<br><br>";
	echo $Auth->getCode($_SESSION['SecretCode']);
	echo "<bR><br>";

	if ($Auth->checkCode($_SESSION['SecretCode'],$_POST['Code'])){
		echo "Successfully Authenticated";
	}else{
		echo "Problem With Authentication. Please Ensure you have entered the correct Key";
	}
	
	


?>