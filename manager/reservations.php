<?php
session_start();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Reservations management</title>
    <link rel="stylesheet" href="../layout.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>

    <?php
    include 'navbar.php';
    ?>

    <div class="col" style="width: 100%; text-align: center;">
        <?php
        include '../db/connection.php';
        if (isset($_GET[''])) {
            //$id_room = $_GET['ourtext'];
            $sql_queryi = "select rooms.*, rclass.* from rooms inner join rclass on rclass.id_class = rooms.room_class";
            $run_sqli = mysqli_query($dbconn, $sql_queryi);

            if (mysqli_num_rows($run_sqli) > 0) {

                while ($row = mysqli_fetch_assoc($run_sqli)) {
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
                         <img src='../media/$img' alt='Background'>
                                                                     </div>";
                }
            }

        }
        ?>

        <div class='imgwr'>
            <h4>
                <?php echo $class_name; ?>
            </h4>
            <p>
                <?php echo $description; ?>
            </p> <br>
            <br>
            <h4>Rooms have the following reservations</h4>
            <table border="1">
                <tr>
                    <th>Room id</th>
                    <th>From date</th>
                    <th>To date</th>
                    <th>Capacity</th>
                </tr>
                <?php
                include 'db/connection';
                $sql_qud = "select rooms.*, rclass.*, reservations.* from rooms inner join rclass on rclass.id_class = rooms.room_class inner join reservations on rooms.id_room = reservations.room_id";
                $ex_qud = mysqli_query($dbconn, $sql_qud);

                while ($row = mysqli_fetch_assoc($ex_qud)) {
                    $id_room = $row['id_room'];
                    $number = $row['room_num'];
                    $capacity = $row['capacity'];
                    $img = $row['thumb'];
                    $class_name = $row['name_class'];
                    $description = $row['description'];
                    $from_date = $row['from_date'];
                    $to_date = $row['to_date'];

                    echo "<tr>
                    <th>$id_room</th>
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