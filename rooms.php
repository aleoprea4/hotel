<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Find your room</title>
    <link rel="stylesheet" href="layout.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
    <?php
    include 'navbar.php';
    ?>
    <div class="col" style="width: 100%; text-align: center;">
        <?php

        for ($i = 1; $i < 7; $i++) {
            echo "<div class='imgwr'>
     <img src='media/background.jpg' alt='Background'>
     <h4>Room - type</h4>
     <p>Text about rooms</p> <br>
     <button type='button' name='button'>Reserve room</button>
   </div>";
        }
        ?>
    </div>
</body>

</html>