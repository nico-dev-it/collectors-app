<?php
$connectionString = 'mysql:host=db; dbname=traveler';
$dbUsername = 'root';
$dbPassword = 'password';
$db = new PDO($connectionString, $dbUsername, $dbPassword);

$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$queryString = 'SELECT * FROM `country_cards`;';
$query = $db->prepare($queryString);
$query->execute();
$allResults = $query->fetchAll();

$countries = $allResults;

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;700&display=swap" rel="stylesheet">
</head>

<body>

<nav>
<h1>TRAVELER</h1>
</nav>


<div class="cardContainer">
<?php
foreach($countries as $country) { ?>
    <div class="countryCard">
        <div class="name">
            <p> <?php echo $country['name'] ?> </p>
        </div>
        <div class="items">
    <p>Place: <?php echo $country['place'] ?> </p>
    <p>Landmark: <?php echo $country['landmark'] ?> </p>
    <p>Activity: <?php echo $country['activity'] ?> </p>
        <p>Food: <?php echo $country['food'] ?> </p>  </div>
    </div>
<?php } ?>
</div>

</body>

</html>
