<?php
	session_start();
	include ("FixedBitNotation.php");
	include ("GoogleAuthenticator.php");
	$Auth = new GAuthen();
	$New_Secret = $Auth->generateSecret();
	$BarcodeURL = $Auth->getURL('','local',$New_Secret);
	$_SESSION['SecretCode'] = $New_Secret;
?>
	<a href="Setup.php">Setup</a> | <a href="index.php">Main</a>
	
	<br><br><br><br>
Manual Account Setup: <?php echo $New_Secret; ?> <br><br>

Setup Via Barcode: <br>
	<img src="<?php echo $BarcodeURL; ?>" height="200" width="200"></img>