<?php

    require_once "_inc/functions.php";

    
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

    require_once '_inc/footer.php';

?>