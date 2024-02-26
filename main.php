<?php

// hotels array
    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],
    ];

    // form submit check
    $form_sent = !empty($_GET);

    // filtered array
    $filtered_hotels = ($form_sent) ? [] : $hotels; 

    // filtering the hotels array
    if($form_sent){
        // checkbox input value variable
        $parking_filter = ($_GET['parking-filter']=='yes') ? true : false;

        var_dump($parking_filter);

        // hotel vote filter
        $hotel_vote = (int) $_GET['vote'];


        // checkbox input value variable
        foreach($hotels as $hotel){
            if($parking_filter){
                if($hotel['parking'] == $parking_filter && $hotel['vote'] >= $hotel_vote){
                    $filtered_hotels [] = $hotel;
                }
            } else {
                if($hotel['vote'] >= $hotel_vote){
                    $filtered_hotels [] = $hotel;
                }
            }
        }
    }

?>