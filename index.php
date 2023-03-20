<?php

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

    $select_Options = isset($_GET['parking']) ? $_GET['parking'] : null;
    //$select_Options = $_GET['parking'];
    var_dump($select_Options);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="container">

        <form action="" method="GET">
            <select name="parking">
                <option value="1">View All</option>
                <option value="2">With Parking</option>
            </select>
            <button type="submit">Invia</button>
        </form>

        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Vote</th>
                    <th>Distance To Center</th>
                </tr>
           </thead> 
           <tbody>
                <?php
                if($select_Options == 1 || $select_Options == null){
                    foreach($hotels as $value){
                        ?>
                        <tr>
                        <td><?php echo $value['name']; ?></th>
                        <td><?php echo $value['description']; ?></th>
                        <td><?php echo $value['vote']; ?></th>
                        <td><?php echo $value['distance_to_center']; ?></th>
                        </tr>
                        <?php
                    }
                } elseif ($select_Options == 2){
                    foreach($hotels as $value){
                        if($value['parking'] == true){
                            ?>
                            <tr>
                            <td><?php echo $value['name']; ?></th>
                            <td><?php echo $value['description']; ?></th>
                            <td><?php echo $value['vote']; ?></th>
                            <td><?php echo $value['distance_to_center']; ?></th>
                            </tr>
                            <?php
                        }
                    }
                }
                ?>
           </tbody>
        </table>
    </div>
</body>
</html>