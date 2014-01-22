<?php
	// On recupere les informations du formulaire
	 if(isset($_POST['name']) && ($_POST['name'])!=''){
	 	$name = $_POST['name'];
	 }

	 if(isset($_POST['email']) && ($_POST['email'])!=''){
	 	$email = $_POST['email'];		
	 }

	 if(isset($_POST['subject']) && ($_POST['subject'])!=''){
		$sub = $_POST['subject'];		
	 }

	 if(isset($_POST['message']) && ($_POST['message'])!=''){
	 	$message = $_POST['message'];		
	 }	

	 $dest = 'didier@diempi.be';
	 $subject = ' Message venant de '.$name.': '.$email;
	
	// Envoi de l'email
	mail($dest, $subject,$message);	
?>
