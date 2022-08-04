<?php require_once 'functions.php';
require_once 'form.php';

$allResults = getAllCountriesFromDb();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;700&family=Spectral+SC:wght@200;300;400&display=swap"
          rel="stylesheet">
    <title>Traveler</title>
</head>
<nav>
    <h1>TRAVELER</h1>
</nav>
<body>
    <div class="cardContainer">
        <?php
        echo displayCards($allResults);
        ?>
    </div>

    <div class="formContainer">
        <form action="form.php" method="post">
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="Name of country"/>
            <label for="place">Place</label>
            <input type="text" name="place" placeholder="Place"/>
            <label for="landmark">Landmark</label>
            <input type="text" name="landmark" placeholder="Landmark"/>
            <label for="activity">Activity</label>
            <input type="text" name="activity" placeholder="Activity"/>
            <label for="food">Food</label>
            <input type="text" name="food" placeholder="Food"/>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
