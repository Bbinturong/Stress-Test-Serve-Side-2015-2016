<?php 
	
	$sql = 'INSERT INTO email(email, heure, personal_id, valid)
		VALUES(:email, :hour, :personal_id, :valid)';
		//$hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
		
		$preparedStatement = $connexion->prepare($sql);
		$preparedStatement->bindValue('email', $_POST['email']);

		$date = date('Y-m-d H:i:s');
		$preparedStatement->bindValue('hour', $date);

		$secret = uniqid();
		$preparedStatement->bindValue('personal_id', $secret);

		$preparedStatement->bindValue('valid', false);
		$preparedStatement->execute();
?>