<?php 

include __DIR__ . "/db.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <!-- vue cdn -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
	<!-- axios cdn -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
	<!-- script -->
    <script src="assets/script.js"></script>
</body>
</html>