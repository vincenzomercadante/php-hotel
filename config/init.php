<?php

// import data file
require_once __DIR__ . "/../data/main.php";

// form submit check
$form_sent = !empty($_GET);

// checkbox input 
$parking_filter = isset($_GET['parking-filter']) ? true : false;

// hotel vote 
$hotel_vote = isset($_GET['vote']) ? $_GET['vote'] : 0;

// filtering the hotels array
if ($form_sent) {
    // filter on hotels after form submitted
    $hotels = $parking_filter ? array_filter($hotels, fn($hotel) => $hotel['parking'] && $hotel['vote'] >= $hotel_vote)
        : array_filter($hotels, fn($hotel) => $hotel['vote'] >= $hotel_vote);
}