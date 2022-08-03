<?php
function dbpull():array{
    $connectionString = 'mysql:host=db; dbname=traveler';
    $dbUsername = 'root';
    $dbPassword = 'password';
    $db = new PDO($connectionString, $dbUsername, $dbPassword);

    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $queryString = 'SELECT * FROM `country_cards`;';
    $query = $db->prepare($queryString);
    $query->execute();
    $allResults = $query->fetchAll();
    return $allResults;
}

function displayCards(array $countries) :string {
    $countriesHTML = '';
    foreach ($countries as $country) {

        if(!is_array($country) ||
            !array_key_exists('name', $country) ||
            !array_key_exists ('place', $country) ||
            !array_key_exists ('landmark', $country) ||
            !array_key_exists ('activity', $country) ||
            !array_key_exists ('food', $country)) {
            return '';
        }

        $countriesHTML .=
            '<div class="countryCard">' .
            '<div class="name">'.
            '<p>' . $country['name'] . '</p>' .
            '</div>'.
            '<div class="items">' .
            '<p>Place: ' . $country['place'] . '</p>' .
            '<p>Landmark: ' . $country['landmark'] . '</p>' .
            '<p>Activity: ' . $country['activity'] . '</p>' .
            '<p>Food: ' . $country['food'] . '</p>' .
            '</div>'.
            '</div>';
    }
    return $countriesHTML;
}

