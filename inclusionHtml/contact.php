<?php

    require_once "_inc/header.php";
    require_once "_inc/nav.php";

?>

<form action="process_contact.php" method="post">
    <label for="firstname">Prénom :</label>
    <input type="text" id="firstname" name="firstname" required>

    <label for="lastname">Nom :</label>
    <input type="text" id="lastname" name="lastname" required>

    <label for="email">Email :</label>
    <input type="email" id="email" name="email" required>

    <label for="subject">Sujet :</label>
    <input type="text" id="subject" name="subject" required>

    <label for="message">Message :</label>
    <textarea id="message" name="message" required></textarea>

    <button type="submit" name="submit">Envoyer</button>
</form>

<?php 

    require_once '_inc/footer.php';

?>