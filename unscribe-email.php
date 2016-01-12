<link rel="stylesheet" href="assets/css/main-style.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<?php include "main-header.php" ?>
<div class='container'>

<?php 	

  	require "db_connect.php";

	$sql = 'DELETE FROM email WHERE personal_id = :id';
    $preparedStatement = $connexion->prepare($sql);
    $preparedStatement->bindValue(':id', $_GET["id"]);
    $preparedStatement->execute();

    echo "<h2> Vous avez bien supprimer votre email de notre Newsletter, A bitenôt ! </h2>";

?>
</div>

<?php include "main-footer.php" ?>