<?php
require_once 'index.php';

function insertToDb($name, $place, $landmark, $activity, $food)
{
    $connectionString = 'mysql:host=db; dbname=traveler';
    $dbUsername = 'root';
    $dbPassword = 'password';
    $db = new PDO($connectionString, $dbUsername, $dbPassword);
    $queryString = 'INSERT INTO `country_cards` (`name`, `place`, `landmark`, `activity`, `food`)
    VALUES (:name, :place, :landmark, :activity, :food)';
    $query = $db->prepare($queryString);
    $query->execute(['name' => $name, 'place' => $place, 'landmark' => $landmark, 'activity' => $activity, 'food' => $food]);
}

if (isset($_POST['name']) && isset($_POST['place']) && isset($_POST['landmark']) && isset($_POST['activity']) && isset($_POST['food'])) {
    $name = $_POST['name'];
    $place = $_POST['place'];
    $landmark = $_POST['landmark'];
    $activity = $_POST['activity'];
    $food = $_POST['food'];
    insertToDb($name, $place, $landmark, $activity, $food);
} else {
    return '';
}
