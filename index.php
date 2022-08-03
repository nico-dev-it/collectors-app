<?php require_once 'functions.php';
$allResults= dbpull();
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;700&display=swap" rel="stylesheet">
<title>Traveler</title>
</head>
<body>

<nav>
<h1>TRAVELER</h1>
</nav>


<div class="cardContainer">
<?php
$countries = $allResults;
echo displayCards($countries);
?>
</div>

</body>
</html>
