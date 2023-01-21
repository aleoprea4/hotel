<?php
session_start();
if (!$_SESSION['usssss']) { //if user not logged in, we do not show page
    header("location: index.php");
}
$uname = $_SESSION['usssss'];

include 'db/connection.php';
$user_info = "select * from customers where username='$uname'";
$r = mysqli_query($dbconn, $user_info);

while ($row = mysqli_fetch_assoc($r)) {
    //  $uname = $row['username'];
    $id = $row['id_customer'];
    $fir = $row['first_name'];
    $lan = $row['last_name'];
    $by = $row['birth_year'];
    $addr = $row['address'];
}

?>



<!DOCTYPE html>
<html lang="en" dir='ltr'>

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
    <h3>Edit your profile</h3>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <input type="text" name="firn" placeholder="<?php echo $fir; ?>">
        <input type="text" name="lan" placeholder="<?php echo $lan; ?>">
        <input type="text" name="biy" placeholder="<?php echo $by; ?>">
        <input type="text" name="addr" placeholder="<?php echo $addr; ?>">


        <button type="submit" name="edit">Edit your profile</button>
    </form>
    <?php
    if (isset($_POST['edit'])) {
        include 'db/connection.php';
        $id_u = $_POST['id'];
        $fn_u = $_POST['firn'];
        $ln_u = $_POST['lan'];
        $by_u = $_POST['biy'];
        $addr_u = $_POST['addr'];

        if ($fn_u == '') {
            echo "Please add your firstname";
            exit();
        } else if ($ln_u == '') {
            echo "Please add your lastname";
            exit();
        } else if ($by_u == '') {
            echo "Please add your birthyear";
            exit();
        } else if ($addr_u == '') {
            echo "Please add your address";
            exit();
        } else {
            $sql_edit_u = "update customers set first_name = '$fn_u', last_name= '$ln_u', birth_year= '$by_u', address= '$addr_u' where id_customer='$id_u' ";
            $r_edit = mysqli_query($dbconn, $sql_edit_u);
            if ($r_edit) {
                echo "Ati editat cu success";
            }
        }
    }

    ?>


    <hr>

    <?php
    include 'db/connection.php';

    $show_re = "select * from reservations where customer_id in (select id_customer from customers where id_customer = '$id')";
    $rsho = mysqli_query($dbconn, $show_re); 
    while ($row = mysqli_fetch_assoc($rsho)) {
        $date_reserv = $row['date_reserv'];
        $fromda = $row['from_date'];
        $toda = $row['to_date'];

        echo "Date: reservation: {$date_reserv}, From date: {$fromda}, To date: {$toda}";
    }
    ?>

</body>

</html>