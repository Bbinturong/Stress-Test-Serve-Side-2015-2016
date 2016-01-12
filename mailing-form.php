<?php 
  
  session_start();
  require "db_connect.php";

 /* Retirer tout les espace en trop et retirer toutes les balises HTML  */
$pseudo = trim(strip_tags($_POST["pseudo"]));
$mdp = trim(strip_tags($_POST["mdp"]));

$_SESSION['pseudo'] = $pseudo;

 $error = [];

 /* Verification de l'envoi du FORM */
 /* $_POST = l'envoi du formulaire et toutes ses clefs */
 if ( !empty($_POST) ) {

 /* On filtre la variable email selon le filtre FILTER_VALIDATE_EMAIL */
  if ($pseudo == "") {
   $error["pseudo"] = "Veuillez inscrire votre pseudo";

  } 
  if ($mdp == "") {
   $error["mdp"] = "Veuillez inscrire votre mot de passe";

  }


}
/* End verification POST formulaire */

$numberError = count($error);

if ($numberError == 0 && !empty($_POST)) {

  $sql = 'SELECT * FROM admin WHERE pseudo = :pseudo';
    $preparedStatement = $connexion->prepare($sql);
    $preparedStatement->bindValue(':pseudo', $pseudo);
    $preparedStatement->execute();
    $user = $preparedStatement->fetch();
    if(!empty($user) && $user["mdp"] == $mdp){
      
      /* Redirige vers une autre page php */
      header("location:mailing-list.php");
    } else {

      $error["login"] = "Votre pseudo ou mot de passe est incorect";
    }
} 


/* Montre les erreurs sous chaque input */
function showError($array, $err){
  if ($array[$err] != "") {
    
   return "<p class='alert'>". $array[$err] . "</p>";
  }
}

?>

<div class='container'>

<h3> Connectez vous pour acceder à la Mailing List. </h3>

<form class='medium-5 medium-centered' method="post" action="">
    
  <label for='pseudo'> Pseudo </label>
  <input placeholder='pseudo'  id='pseudo' name='pseudo' type='text' <?php echo "value=".$pseudo; ?>>

  <label for='mdp'> Mot de passe </label>
  <input placeholder='Mot de passe'  id='mdp' name='mdp' type='text' <?php echo "value=".$mdp; ?>>  

	<button class='button'> Envoyer </button>
  <?= showError($error, "pseudo"); ?> 
  <?= showError($error, "mdp"); ?>
<?= showError($error, "login"); ?>

</form>

</div>
