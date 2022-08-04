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
<body>
    <nav>
        <h1>TRAVELER</h1>
    </nav>
    <div class="cardContainer">
        <?php
        echo displayCards($allResults);
        ?>
    </div>
</body>
</html>
