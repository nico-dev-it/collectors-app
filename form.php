<?php

$connectionString = 'mysql:host=db; dbname=traveler';
$dbUsername = 'root';
$dbPassword = 'password';
$db = new PDO($connectionString, $dbUsername, $dbPassword);


if (isset($_POST['submit'])) {
    [
        $name = $_POST['name'],
        $place = $_POST['place'],
        $landmark = $_POST['landmark'],
        $activity = $_POST['activity'],
        $food = $_POST['food'],
        ]
} return


$queryString = 'INSERT INTO `country_cards` (`name`, `place`, `landmark`, `activity`, `food`)
    VALUES (::name, ::place, ::landmark, ::activity, ::food)';
$query = $db->prepare($queryString);
$query->execute(['name' => $name, 'place' => $place, 'landmark' => $landmark, 'activity' => $activity, 'food'=> $food]);