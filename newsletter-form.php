<?php 
  
  session_start();
  require "db_connect.php";

  /* Checking Honeypot */
  if ($_POST["adress"] != "") {
    die("Inscription réussie !");
 }

 $error = [];

 /* Retirer tout les espace en trop et retirer toutes les balises HTML  */
 $email = trim(strip_tags($_POST["email"]));


   $sql = 'SELECT * FROM email WHERE email = :email';
    $preparedStatement = $connexion->prepare($sql);
    $preparedStatement->bindValue(':email', $email);
    $preparedStatement->execute();
    $email_used = $preparedStatement->fetch();
    if (!empty($email_used)) {
      $error["exist"] = "Email déja utilisé";
    }

 $_SESSION["email"] = $email;


 /* Verification de l'envoi du FORM */
 /* $_POST = l'envoi du formulaire et toutes ses clefs */
 if ( !empty($_POST) ) {

 /* On filtre la variable email selon le filtre FILTER_VALIDATE_EMAIL */
  if (empty($email)) {
   $error["email_empty"] = "Veuillez inscrire votre email";

  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $error["email_wrong"] = "Email non valide";
  }

}
/* End verification POST formulaire */

$numberError = count($error);

if ($numberError == 0 && !empty($_POST)) {
    
  include "add-db.php";

  /* Redirige vers une autre page php */
  header("location:merci.php");
}


/* Montre les erreurs sous chaque input */
function showError($array, $err){
  if ($array[$err] != "") {
    
   return "<p class='alert'>". $array[$err] . "</p>";
  }
}

?>

<div class="form_container container">

  <h3> Veuillez vous inscrire à notre Newsletter </h3>
<form  method="post" action="">
    
  <label for='email'> Email </label>
  <input  id='email' name='email' type='text' placeholder="youremail@exemple.be" <?php echo "value=".$email; ?>>
   

  <input style="display:none;" name='adress' type='text'>

	<button class='button'> Envoyer </button>
  <?= showError($error, "exist"); ?> 
<?= showError($error, "email_empty"); ?>
<?= showError($error, "email_wrong"); ?> 

</form>
</div>

