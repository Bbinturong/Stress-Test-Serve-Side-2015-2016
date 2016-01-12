<link rel="stylesheet" href="assets/css/main-style.css">
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">


<?php 
	
	session_start();
	require "db_connect.php";

?>
<?php include "main-header.php" ?>

<div class='container'>
<div>

	<h1> Ma mailing list </h1>

	<?php echo '<p> Connecté en tant que ' . $_SESSION['pseudo'] .'</p>'; ?>
	<a style="display='inline-block';" id='logout' href="mailing-index.php"> Logout </a>

</div>

<main>

	<div>

		<?php 

		$sql = 'SELECT * FROM email';			
			$preparedStatement = $connexion->prepare($sql);
			$preparedStatement->execute();
			$result = $preparedStatement->fetchAll();

		foreach ($result as $row) {
			
			echo "<p class='list'> Email : ". $row['email'] . " - ID : " . $row['personal_id'] . "</p>";
		}		

		?>

	</div>

</main>

</div>
<?php include "main-footer.php" ?>