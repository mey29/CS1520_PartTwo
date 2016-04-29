/*
 * Megan Yates: Contact Page - CS1520 Part Two
 * 
 * PHP file to accept post from contact form.
 * Name, Email, Phone number, and Message will be sent to database megan and table contact
 * If table does not exist, create one
 */

<?php
	$db = new mysqli('localhost', 'megan', '', 'megan');
	if ($db->connect_error): 
		die ("Could not connect to db " . $db->connect_error); 
	endif;

	$result = $db->query("CREATE TABLE IF NOT EXISTS  contact (id INT PRIMARY KEY NOT NULL AUTO_INCREMENT, name VARCHAR(30) NOT NULL,
																email TEXT NOT NULL, phone VARCHAR(10) NOT NULL, message MEDIUMTEXT NOT NULL)") or die ("Invalid: " . $db->error);
	
	if(isset($_POST['Name']) && isset($_POST['Email']) && isset($_POST['Phone']) && isset($_POST['Message'])){
		$name = $_POST['Name'];
		$email = $_POST['Email'];
		$phone = $_POST['Phone'];
		$message = wordwrap($_POST['Message']);
		
		$query = "INSERT INTO contact VALUES (NULL, '$name', '$email', '$phone', '$message')";
    
    	$db->query($query) or die ("Invalid insert " . $db->error); 
  	}
?>
