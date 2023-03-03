<?php
// Inclusion des fichiers requis
require_once '_inc/functions.php';
require_once '_inc/header.php';
require_once '_inc/nav.php';

// Récupération de l'identifiant du jeu vidéo depuis l'URL

$id = $_GET['id'];

// Récupération des informations du jeu vidéo en utilisant son identifiant
$video_game_info = get_game_by_id($id);
// var_dump($video_game_info);


?>

<div>
  <h1><?php echo $video_game_info['title']; ?></h1>
  <!-- <p>Genre: <?php // echo $video_game_info['genre']; ?></p> -->
  <p>Date de sortie: <?php echo date_format(new DateTime($video_game_info['release_date']), 'd/m/Y'); ?></p>
  <p>Description: <?php echo $video_game_info['description']; ?></p>
</div>

<?php
// Inclusion du fichier footer.php
require_once '_inc/footer.php';
?>
