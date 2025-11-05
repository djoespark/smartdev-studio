<?php include('includes/header.php'); ?>

<h2>Contactez-nous</h2>
<div class="contact-box">
<form action="contact.php" method="post">
    <label for="name">Nom :</label>
    <input type="text" name="name" required>
    
    <label for="email">Email :</label>
    <input type="email" name="email" required>
    
    <label for="message">Message :</label>
    <textarea name="message" required></textarea>
    
    <button type="submit">Envoyer</button>
</form>
</div>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "djaglijosephbenoit@gmail.com";
    $subject = "Message depuis le site SmartDev Studio";
    $message = "Nom: ".$_POST['name']."\nEmail: ".$_POST['email']."\nMessage: ".$_POST['message'];
    $headers = "From: ".$_POST['email'];
    
    if(mail($to, $subject, $message, $headers)) {
        echo "<p>Merci ! Votre message a été envoyé.</p>";
    } else {
        echo "<p>Erreur lors de l'envoi. Réessayez.</p>";
    }
}
?>

<?php include('includes/footer.php'); ?>
