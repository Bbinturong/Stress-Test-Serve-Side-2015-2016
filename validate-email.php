<link rel="stylesheet" href="assets/css/main-style.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<?php include "main-header.php" ?>
<div class='container'>

<?php 	

  	require "db_connect.php";

	$sql = 'UPDATE email SET valid = true WHERE personal_id = :id';
    $preparedStatement = $connexion->prepare($sql);
    $preparedStatement->bindValue(':id', $_GET["id"]);
    $preparedStatement->execute();


    $sql = 'SELECT * FROM email WHERE personal_id = :id';
    $preparedStatement = $connexion->prepare($sql);
    $preparedStatement->bindValue(':id',  $_GET["id"]);
    $preparedStatement->execute();
    $email_used = $preparedStatement->fetch();

    $date = date('Y-m-d H:i:s');
    if ($email_used['heure'] ) {
     	# code...
     } 

    echo "<h2> Vous avez bien valider votre email, Merci ! </h2>";

?>

</div>

<?php include "main-footer.php" ?>