<?php
        //inclusions
        require_once "_inc/functions.php";


        require_once "_inc/header.php";
        require_once "_inc/nav.php";

    // Récupérer trois jeux vidéo sélectionnés aléatoirement
    $random_games = get_random_games(3);

?>
    <div class="container mt-4">

<h1 class="text-center mb-4">Accueil</h1>

<div class="row">

    <?php foreach ($random_games as $game): ?>

        <div class="col-md-4 mb-3">
            <div class="card h-100">
                <img src="<?php echo $game['image_url']; ?>" alt="<?php echo $game['title']; ?>" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $game['title']; ?></h5>
                    <p class="card-text">Prix : <?php echo $game['price']; ?> €</p>
                    <a href="game.php?id=<?php echo $game['id']; ?>" class="btn btn-primary">Consulter</a>
                </div>
            </div>
        </div>

    <?php endforeach; ?>

</div>

</div>

<?php 
    require_once '_inc/footer.php';
?>
   