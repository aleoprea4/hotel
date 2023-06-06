<?php
session_start();
if (!$_SESSION['admin_ses']) { //if user not logged in, we do not show page
    header("location: index.php");
}

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
        include '../db/connection.php';
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
    <?php
    include '../db/connection.php';
    $room_info = "select rooms.* from rooms";
    $r = mysqli_query($dbconn, $room_info);

    while ($row = mysqli_fetch_assoc($r)) {
        //  $uname = $row['username'];
        $id = $row['id_room'];
        $fir = $row['room_num'];
        $lan = $row['room_class'];
        $by = $row['capacity'];
        $addr = $row['price'];
        $desc = $row['description'];
    }
    ?>
    <h3>Create a new room</h3>
    <form action="" method="post">
       <!-- <input type="text" name="id" value="<--?php echo $id; ?>"> -->
        <input type="text" name="firn" value="<?php echo $fir; ?>" placeholder="Numar camera">
        <input type="text" name="lan" value="<?php echo $lan; ?>" placeholder="Clasa camera">
        <input type="text" name="biy" value="<?php echo $by; ?>"    placeholder="Capacitate">
        <input type="text" name="addr" value="<?php echo $addr; ?>" placeholder="Pret">
        <input type="text" name="desc" value="<?php echo $desc; ?>"placeholder="Descriere">



        <button type="submit" name="create">Create a new room</button>
        <div>  </div>

    </form>
   
    <form action="" method="post">
        <input type="text" name="id" value="<?php echo $id; ?>">
 
        <button type="submit" name="delete">Delete a room</button>

    </form>

    <?php
    if (isset($_POST['create'])) {
       // include '../db/connection.php';
        $id_u = $_POST['id'];
        $fn_u = $_POST['firn'];
        $ln_u = $_POST['lan'];
        $by_u = $_POST['biy'];
        $addr_u = $_POST['addr'];
        $desc_u = $_POST['desc'];


     
        $sql_edit_u = "insert into rooms(room_num,room_class, capacity,price,description ) values ($fn_u, $ln_u, $by_u, $addr_u, $desc_u )";
        $r_edit_u = mysqli_query($dbconn, $sql_edit_u);
        if ($r_edit_u) {
            echo "Ati adaugat cu success o camera noua";
    }
}
    ?>

<?php
    if (isset($_POST['delete'])) {
            $sql_delete_u = "delete from rooms where id_room=$id";
            $r_delete_u = mysqli_query($dbconn, $sql_delete_u);
            if ($r_delete_u) {
                echo "Ati sters cu success o camera noua";
            }
        }
        ?>
    



</body>

</html>