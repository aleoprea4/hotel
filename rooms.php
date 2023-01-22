<?php
session_start();
?>

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
        include 'db/connection.php';
        // if($dbconn){
//             echo "Connected";
// } else {echo "Not working";};
        
        $our_q = "select rooms.*, rclass.* from rooms inner join rclass on rclass.id_class = rooms.room_class";
        $result = mysqli_query($dbconn, $our_q);

        if (mysqli_num_rows($result) > 0) {

            while ($row = mysqli_fetch_assoc($result)) {
                $id_room = $row['id_room'];
                $number = $row['room_num'];
                $capacity = $row['capacity'];
                $img = $row['thumb'];
                $class_name = $row['name_class'];
                $description = $row['description'];
              //  echo "rooms " . $number;

                echo "<div class='imgwr'>
                <img src='media/$img' alt='Background'>
                <h4>$class_name</h4>
                <p>$description</p> <br>
                <a href='roomdetail.php?ourtext=$id_room'>Reserve room</a><br>
              </div>";
            }
        }


        //         for ($i = 1; $i < 7; $i++) {
//             echo "<div class='imgwr'>
//      <img src='media/background.jpg' alt='Background'>
//      <h4>Room - type</h4>
//      <p>Text about rooms</p> <br>
//      <button type='button' name='button'>Reserve room</button>
//    </div>";
//         }
        ?>
    </div>
</body>

</html>