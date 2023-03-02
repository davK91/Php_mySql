<?php
if (isset($_POST['submit'])) {
    // Le formulaire a été soumis, traiter les données ici
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Créer la variable submissionDate avec le timestamp actuel
    $submissionDate = new DateTime();
    $submissionDate->setTimestamp($_SERVER['REQUEST_TIME']);

    // Formater la date pour l'afficher
    $submissionDateFormat = $submissionDate->format('d/m/Y H:i:s');

    // Afficher la saisie et la date de soumission
    echo "<p>Vous avez saisi :</p>";
    echo "<ul>";
    echo "<li>Prénom : $firstname</li>";
    echo "<li>Nom : $lastname</li>";
    echo "<li>Email : $email</li>";
    echo "<li>Sujet : $subject</li>";
    echo "<li>Message : $message</li>";
    echo "<li>Date de soumission : $submissionDateFormat</li>";
    echo "</ul>";
}
?>
