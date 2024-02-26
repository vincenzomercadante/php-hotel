
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
    </head>
    <body>
        <h1>HOTEL BOL VA GO</h1>
        <table border='1'>
            <theader>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Parking</th>
                    <th>Vote</th>
                    <th>Distance to center (km)</th>
                </tr>
            </theader>
            <tbody>
                <?php foreach($hotels as $hotel): ?>
                <tr>
                    <td><?= $hotel['name'] ?></td>
                    <td><?= $hotel['description'] ?></td>
                    <td><?= $hotel['parking'] ?></td>
                    <td><?= $hotel['vote'] ?></td>
                    <td><?= $hotel['distance_to_center'] ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table> 
    </body>
</html>