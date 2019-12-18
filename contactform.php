<?php

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$name = $_POST['name'];
	$text = $_POST['text'];
	
	$mailTo = "vincent.haschke@innochange.com";
	$headers = "From: ".$email;
	$txt = "You have received an e-mail from ".$name.".\n\n".$message;
	
	mail($mailTo, $txt, $headers);
	header("Location: index.php?mailsend");
}