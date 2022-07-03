<?php 

include __DIR__ . "/db.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DISCHI CON PHP</title>
    <!-- StyleSheet -->
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <div id="app">
        <header>
            <img src="../milestone1/assets/Spotify_logo.svg" alt="logo">
            <!-- <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/Spotify_logo_without_text.svg/2048px-Spotify_logo_without_text.svg.png" alt=""> -->
        </header>

        <main>
            <div id="cardContainer">
                <?php 
                    foreach($arr_albums as $album){?>
                    <div class="card">
                        <img src="<?= $album['poster'] ?>" alt="<?= $album['title'] ?>">
                        <h4><?= $album['title'] ?></h4>
                        <p><?= $album['author'] ?></p>
                        <p><?= $album['year'] ?></p>
                    </div><?php
                } ?>

            </div>
        </main>
    </div>
</body>
</html>