<link rel="stylesheet" href="assets/css/main-style.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<?php include "main-header.php" ?>
<div class='container'>
<?php 
	

	echo "<h1> Vous êtes bien inscrit ! </h1>";

  	include "send-email.php";
  	
	echo "<p> Veuillez valider votre mail dans les 30minutes ! </p>";
?>
</div>

<?php include "main-footer.php" ?>