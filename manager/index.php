<?php
session_start();
if (!$_SESSION['admins_ses']) { //if user not logged in, we do not show page
    header("location: index.php");
}
$uname = $_SESSION['admin_ses'];

include '../db/connection.php';
$user_info = "select * from auth_user where username='$uname'";
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
echo"<div class='ind'>
<h2>Welcome to the Hotel management system</h2>
<h3>Please choose one of the options in the navigation menu to start</h3></div>
</body>
</html>";
include 'navbar.php'; 

?>