<?php

// include main file
require_once __DIR__ . ('/config/init.php');

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hotel</title>

    <!-- import bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- my style -->
    <link href="./style.css" rel="stylesheet">

</head>

<body class="d-flex justify-content-center flex-column px-3">
    <!-- page title -->
    <h1 class="text-center text-success display-3 my-5">HOTEL BOL VA GO</h1>

    <form method="GET" class="container d-flex flex-column align-items-center">
        <!-- parking area input -->
        <label class="form-check-label fs-3 fw-semibold" for="parking">With Parking Area?</label>
        <input type="checkbox" name="parking-filter" id="parking" class="form-check-input" <?= $parking_filter ? 'checked' : '' ?>>

        <!-- hotel vote filter -->
        <label class="form-check-label fs-3 mt-3 fw-semibold" for="vote">With Vote:</label>
        <select name="vote" id="vote" class="form-select">
            <option value="0" <?= $hotel_vote == 0 ? 'selected' : '' ?>>Select the minimum vote</option>
            <option value="1" <?= $hotel_vote == 1 ? 'selected' : '' ?>>1</option>
            <option value="2" <?= $hotel_vote == 2 ? 'selected' : '' ?>>2</option>
            <option value="3" <?= $hotel_vote == 3 ? 'selected' : '' ?>>3</option>
            <option value="4" <?= $hotel_vote == 4 ? 'selected' : '' ?>>4</option>
            <option value="5" <?= $hotel_vote == 5 ? 'selected' : '' ?>>5</option>
        </select>

        <!-- submit -->
        <input type="submit" name="" id="" class="btn btn-primary mt-3" value="SUBMIT">
    </form>

    <hr />
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

            <?php foreach ($hotels as $hotel): ?>
                <tr>
                    <td>
                        <?= $hotel['name'] ?>
                    </td>
                    <td>
                        <?= $hotel['description'] ?>
                    </td>
                    <td>
                        <?= ($hotel['parking'] ? 'Yes' : 'No') ?>
                    </td>
                    <td>
                        <?= $hotel['vote'] ?>
                    </td>
                    <td>
                        <?= $hotel['distance_to_center'] ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>