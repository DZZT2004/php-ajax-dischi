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
    <title>Dischi versione 2</title>
    <link rel="stylesheet" href="assets/style.css">

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js" defer></script>
	<script src="https://cdn.jsdelivr.net/npm/vue@2.7.14/dist/vue.js" defer></script>
	<script src="assets/script.js" defer></script>
</head>
<body>
    <header>
        <img src="images/spotify-logo.png" alt="errore">
    </header>
    <main id="root">
        <div class="container">
            <div v-for="disco in dischi" :key="disco.title" class="disco">
				<img :src="disco.poster" :alt="disco.title">
				<div class="titolo">{{ disco.title }}</div>
				<div class="artista">{{ disco.author }}</div>
				<div class="anno">{{ disco.year }}</div>
			</div>
        </div>
    </main>
</body>
</html>