/*
 * Megan Yates: Contact Page - CS1520 Milestone One
 * 
 * PHP file to accept post from contact form.
 * Email will be used to create the text file and saved in XAMMP/xammpfiles/htdocs/Megan_Yates
 * Name, Phone number, and Message will appear in text file
 */

<?php
	if(isset($_POST['Name']) && isset($_POST['Email']) && isset($_POST['Phone']) && isset($_POST['Message'])){
		$to = "megeyates@gmail.com";
		$message = wordwrap($_POST['Message']);
		$headers = "From: " . $_POST['Name'] . "\r\n" . "Phone: " . $_POST['Phone'];
		$file = fopen("../" . $_POST['Email'] . ".txt", "w") or die("Unable to open file!");
		
		fwrite($file, $headers);
		fwrite($file, "\nMessage: " . $message . "\n");
		fclose($file);
		header("Location: ../php/contact.php");
		exit;
	}
	else
		header("Location: ../php/contact.php");
		exit;	
?>