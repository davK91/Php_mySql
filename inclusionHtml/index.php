<?php
        //inclusions
        require_once "_inc/functions.php";


        require_once "_inc/header.php";
        require_once "_inc/nav.php";

    // Récupérer trois jeux vidéo sélectionnés aléatoirement
    $random_games = get_random_games(3);

?>
    <h1>Home</h1>

    <div class="games-container">
  <?php foreach ($random_games as $game): ?>
    <div class="game">
      <h2><?php echo $game['title']; ?></h2>
      <img src="<?php echo $game['image_url']; ?>" alt="<?php echo $game['title']; ?>">
      <p>Prix : <?php echo $game['price']; ?> €</p>
      <a href="game.php?id=<?php echo $game['id']; ?>" class="button">Consulter</a>
    </div>
  <?php endforeach; ?>
</div>

<?php 
    require_once '_inc/footer.php';
?>
   