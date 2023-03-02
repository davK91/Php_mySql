<?php

    
    function isEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }


    function isLong($string, $minLength) {
    return strlen($string) >= $minLength;
    }

    function verifForm():void
    {
        if (isEmail($_POST['email']) && isLong($_POST['subject'], 10) && isLong($_POST['message'], 10)) {
            echo "Le formulaire est valide, on peut l'envoyer";
        } else {
            echo "Le formulaire est invalide, afficher un message d'erreur";
        }
    }
    

?>