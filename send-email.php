<?php 

	session_start();
    require 'mailer-master/PHPMailerAutoload.php';

    require "db_connect.php";
    $sql = 'SELECT * FROM email WHERE email = :email';
    $preparedStatement = $connexion->prepare($sql);
    $preparedStatement->bindValue(':email', $_SESSION["email"]);
    $preparedStatement->execute();
    $email = $preparedStatement->fetch();
    $id = $email['personal_id'];

    $mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mandrillapp.com';  				  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'alexandre@pixeline.be';            // SMTP username
$mail->Password = 'bDMUEuWn1H4r3FCGQjyO-g';           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('newsletter@mysuperapp.com', 'Newsletter');
$mail->addAddress($_SESSION["email"], 'Joe User');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
$mail->addReplyTo('info@mysuperapp.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Inscription Newsletter';
$mail->Body    = ' Vous êtes bien enregistré à notre Newsletter, cliquer sur ce liens pour valider votre inscription' . ' ' . 'http://brunomattelet.be/php/mailinglist/validate-email.php?id=' . $id . 
                ' Ou sur celui-ci pour vous retirer de notre Newsletter' . ' ' . 'http://brunomattelet.be/php/mailinglist/unscribe-email.php?id=' . $id ;

if(!$mail->send()) {
    echo "<p>Impossible d'envoyer le message</p>";
    echo '<p>Error: ' . $mail->ErrorInfo . '</p>';
} else {
    echo '<p> Message envoyé à' . ' ' . $_SESSION["email"] . '</p>';
}

?>