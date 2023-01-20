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
        if (isset($_GET['ourtext'])) {
            $id_room = $_GET['ourtext'];
            $sql_query = "select rooms.*, rclass.* from rooms inner join rclass on rclass.id_class = rooms.room_class  where id_room = $id_room";
            $run_sql = mysqli_query($dbconn, $sql_query);

            if (mysqli_num_rows($run_sql) > 0) {

                while ($row = mysqli_fetch_assoc($run_sql)) {
                    $id_room = $row['id_room'];
                    $number = $row['room_num'];
                    $capacity = $row['capacity'];
                    $img = $row['thumb'];
                    $class_name = $row['name_class'];
                    $description = $row['description'];
                    $from_date = $row['from_date'];
                    $to_date = $row['to_date'];
                    $capacity = $row['capacity'];


                    echo "<div class='imgwr'>
    <img src='media/$img' alt='Background'>
  </div>";
                }
            }

        }
        ?>

<div class='imgwr'>
            <h4>
                <?php echo $class_name; ?>
            </h4>
            <p><?php echo $description; ?></p> <br>
            <br>
            <h4>This room is not available on these dates</h4>
            <table border="1">
                <tr>
                    <th>From date</th>
                    <th>To date</th>
                    <th>Capacity</th>
                </tr>
                <?php
                include 'db/connection';
                $sql_qu = "select rooms.*, rclass.*, reservations.* from rooms inner join rclass on rclass.id_class = rooms.room_class inner join reservations on rooms.id_room = reservations.room_id  where id_room = $id_room";
                $ex_qu = mysqli_query($dbconn, $sql_qu);

                while ($row = mysqli_fetch_assoc($ex_qu)) {
                    $id_room = $row['id_room'];
                    $number = $row['room_num'];
                    $capacity = $row['capacity'];
                    $img = $row['thumb'];
                    $class_name = $row['name_class'];
                    $description = $row['description'];
                    $from_date = $row['from_date'];
                    $to_date = $row['to_date'];

                    echo "<tr>
                     <th>$from_date</th>
                    <th>$to_date</th>
                    <th>$capacity</th></tr>";
                }
                ?>
            </table>
        </div>

    </div>
    <!--closing col dvi -->


</body>

</html>