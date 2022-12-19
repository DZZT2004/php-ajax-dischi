<?php
include __DIR__ . '/settings.php';
include __DIR__ . '/database/data.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi versione 1</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <header>
        <img src="images/spotify-logo.png" alt="errore">
    </header>
    <main>
        <div class="container">
        <?php
				foreach ($arr_discs as $disco) { ?>

					<div class="disco">
						<img src="<?= $disco['poster'] ?>" alt="<?= $disco['title'] ?>">
						<div class="titolo"><?= $disco['title'] ?></div>
						<div class="artista"><?= $disco['author'] ?></div>
						<div class="anno"><?= $disco['year'] ?></div>
					</div><?php

				} ?>
        </div>
    </main>
</body>
</html>