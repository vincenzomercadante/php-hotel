<?php 

// include main file
require_once('./main.php'); 

    // form submit check
    $form_sent = !empty($_GET);

    // filtered array
    $filtered_hotels = ($form_sent) ? [] : $hotels; 

    // filtering the hotels array
    if($form_sent){
        // checkbox input value variable
        $parking_filter = ($_GET['parking-filter']=='yes') ? true : false;

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


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Hotel</title>

        <!-- import bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <!-- my style -->
        <link href="./style.css" rel="stylesheet">

    </head>
    <body class="d-flex justify-content-center flex-column px-3">
        <!-- page title -->
        <h1 class="text-center text-success display-3 my-5">HOTEL BOL VA GO</h1>

        <form method="GET" class="container d-flex flex-column align-items-center">
            <h2>With Parking Area?</h2>
            <!-- parking area input -->
            <div class="d-flex">
                <label class="form-check-label me-2" for="parking">Yes</label>
                <input type="radio" name="parking-filter" id="parking" class="form-check-input" value="yes">
                
                <label class="form-check-label ms-3 me-2 " for="parking">No</label>
                <input type="radio" name="parking-filter" id="parking" class="form-check-input" value="no" checked>
            </div>

            <!-- hotel vote filter -->
            <label class="form-check-label fs-3 mt-3 fw-semibold" for="vote">With Vote:</label>
            <select name="vote" id="vote" class="form-select">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
            
            <!-- submit -->
            <input type="submit" name="" id="" class="btn btn-primary mt-3" value="SUBMIT">
        </form>

        <hr/>
        <table class="table table-hover table-dark">
            <theader>
                <!-- table header -->
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Parking</th>
                    <th>Vote</th>
                    <th>Distance to center (km)</th>
                </tr>
            </theader>
            <tbody>
                <!-- hotel info printer -->
                <?php foreach($filtered_hotels as $hotel): ?>
                <tr>
                    <td><?= $hotel['name'] ?></td>
                    <td><?= $hotel['description'] ?></td>
                    <td><?= ($hotel['parking'] ? 'Yes' : 'No') ?></td>
                    <td><?= $hotel['vote'] ?></td>
                    <td><?= $hotel['distance_to_center'] ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table> 
    </body>
</html>