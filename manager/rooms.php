<?php
session_start();
if (!$_SESSION['admin_ses']) {
    header("location: index.php");
}

include '../db/connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel management system</title>
    <link rel="stylesheet" href="../layout.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style media="screen">
        h1 {
            font-size: 40px;
        }
    </style>
</head>

<body>

    <?php
    include 'navbar.php';
    ?>

    <div class="ind">
        <ul>
            <h3> Edit available rooms below </h3> <br> <br>
        </ul>
    </div>
    <div class="col" style="width: 100%; text-align: center;">
        <?php
        $our_q = "SELECT rooms.*, rclass.* FROM rooms INNER JOIN rclass ON rclass.id_class = rooms.room_class";
        $result = mysqli_query($dbconn, $our_q);

        if (mysqli_num_rows($result) > 0) {

            while ($row = mysqli_fetch_assoc($result)) {
                $id_room = $row['id_room'];
                $number = $row['room_num'];
                $capacity = $row['capacity'];
                $img = $row['thumb'];
                $class_name = $row['name_class'];
                $description = $row['description'];

                echo "<div class='imgwr'>
                <img src='../media/$img' alt='Background'>
                <h4>Room type: $class_name</h4>
                <p>$description</p> <br>
                <p>$id_room</p> <br>
                <a href='roomanager.php?ourtext=$id_room'>Make changes to this room</a><br>
              </div>";
            }
        }
        ?>
    </div>

    <div class="ind">
        <ul>
            <h3> Create a new room </h3> <br> <br>
        </ul>
    </div>
    <div class="col" style="width: 100%; text-align: center;">

    </div>
    
    <h3>Create a new room</h3>
    <form action="" method="post">
        <input type="text" name="room_number" placeholder="Numar camera">
        <input type="text" name="room_class" placeholder="Clasa camera">
        <input type="text" name="room_capacity" placeholder="Capacitate">
        <input type="text" name="room_price" placeholder="Pret">
        <input type="text" name="room_description" placeholder="Descriere">
        <button type="submit" name="create">Create a new room</button>
    </form>

    <?php
    if (isset($_POST['create'])) {
        $room_number = mysqli_real_escape_string($dbconn, $_POST['room_number']);
        $room_class = mysqli_real_escape_string($dbconn, $_POST['room_class']);
        $room_capacity = mysqli_real_escape_string($dbconn, $_POST['room_capacity']);
        $room_price = mysqli_real_escape_string($dbconn, $_POST['room_price']);
        $room_description = mysqli_real_escape_string($dbconn, $_POST['room_description']);

        $sql_insert_room = "INSERT INTO rooms(room_num, room_class, capacity, price, description) 
        VALUES ($room_number, '$room_class', $room_capacity, $room_price, '$room_description')";
        $result_insert_room = mysqli_query($dbconn, $sql_insert_room);
        if ($result_insert_room) {
            echo "Ati adaugat cu success o camera noua";
        } else {
            echo "A aparut o eroare: " . mysqli_error($dbconn);
        }
    }
    ?>

    <form action="" method="post">
        <input type="text" name="id_room" placeholder="Id camera">
        <button type="submit" name="delete">Delete a room</button>
    </form>

    <?php
    if (isset($_POST['delete'])) {
        $id_room = mysqli_real_escape_string($dbconn, $_POST['id_room']);
        $sql_delete_room = "DELETE FROM rooms WHERE id_room = $id_room";
        $result_delete_room = mysqli_query($dbconn, $sql_delete_room);
        if ($result_delete_room) {
            echo "Ati sters cu succes o camera.";
        } else {
            echo "A aparut o eroare: " . mysqli_error($dbconn);
        }
    }
    ?>

</body>

</html>
