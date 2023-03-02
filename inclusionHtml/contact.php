<?php

    require_once "_inc/header.php";
    require_once "_inc/nav.php";

?>

<form action="process_contact.php" method="post">
    <label for="firstname">Prénom :</label><br>
    <input type="text" id="firstname" name="firstname" required> <br>

    <label for="lastname">Nom :</label> <br>
    <input type="text" id="lastname" name="lastname" required> <br>

    <label for="email">Email :</label><br>
    <input type="email" id="email" name="email" required> <br>


    <label for="subject">Sujet :</label><br>
    <input type="text" id="subject" name="subject" required> <br>

    <label for="message">Message :</label><br>
    <textarea id="message" name="message" required></textarea> <br>

    <button type="submit" name="submit">Envoyer</button>
</form>

<?php
    if (isset($_POST['submit'])) {
    // Le formulaire a été soumis, traiter les données ici
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

    // Faire quelque chose avec les données (envoyer un email, les enregistrer dans une base de données, etc.)
    }
?>


<?php 

    require_once '_inc/footer.php';

?>