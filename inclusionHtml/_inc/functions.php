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

    //Connexion à la BDD 
    function dbConnection():PDO {     
        $connection= new PDO('mysql:host=127.0.0.1;dbname=videogames','root','',
        [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, 
        ]
    );
        return $connection;  
    }
    // Connexion à la base de données
    //$db = new PDO('mysql:host=localhost;dbname=videogames', 'root', 'root');

    function get_random_games($num_games = 3) {
        $db = dbConnection();
    // Sélection aléatoire de $num_games jeux vidéo
        
        $stmt = $db->prepare('SELECT * FROM game ORDER BY RAND() LIMIT :num_games');
        $stmt->bindValue(':num_games', $num_games, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function get_all_games() {
        $db = dbConnection();
        // Récupération de tous les jeux vidéo présents dans la table game
        $stmt = $db->query('SELECT * FROM game');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function get_game_by_id($game_id) {
        $db = dbConnection();
        // Récupération d'un jeu vidéo à partir de son identifiant
        $stmt = $db->prepare('SELECT * FROM game WHERE id = :game_id');
        $stmt->bindValue(':game_id', $game_id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
?>
