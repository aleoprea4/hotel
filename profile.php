<?php
session_start();
if (!$_SESSION['usssss']) { //if user not logged in, we do not show page
    header("location: index.php");
    $uname = $_SESSION['usssss'];

    include 'db/connection.php';
    $user_info = "select * from customers where username='$uname'";
    $r = mysqli_query($dbconn, $user_info);

    while ($row = mysqli_fetch_assoc($r)) {
        $id = $row['id_customer'];
        $fir = $row['first_name'];
        $lan = $row['last_name'];
        $by = $row['birth_year'];
    }
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

        <button type="submit" name="edit">Edit your profile</button>
<?php
if(isset($_POST['edit'])){
    include 'db/connection.php';
    $id_u = $_POST['id'];
    $fn_u = $_POST['firn'];
    $ln_u = $_POST['lan'];
    $by_u = $_POST['biy']; 

    if($fn_u ==''){
        echo "Please add your firstname";
        exit();
    }
    $sql_edit = "update customer set firstname='$fn_u', lastname='$ln_u', birth_year='$by_u where id_customer='$id_u' ";
    $r_edit = mysqli_query($dbconn, $sql_edit);
    if($r_edit){
        echo "Ati editat cu success";
    }
}
?>


</body>

</html>