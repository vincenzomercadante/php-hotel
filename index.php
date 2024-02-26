
<?php 

// include main file
require_once('./main.php'); 

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
                <?php foreach($hotels as $hotel): ?>
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