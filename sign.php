<?php
session_start();
if($_SESSION['usssss']){
    header("location: index.php");

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sign in</title>
    <link rel="stylesheet" href="layout.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
    <?php
    include 'navbar.php';
    include 'db/connection.php';

    if (isset($_GET['account'])) {
        //$account = 0;
        echo "<h3>Sign up</h3>";
        echo "<br><br><br><form action='' method='post'>";
        echo "<input type='text' name='n_una' placeholder='Username'>";
        echo "<input type='password' name='n_pass' placeholder='Password'>";
        echo "<input type='text' name='n_una' placeholder='First Name'>";
        echo "<input type='text' name='n_una' placeholder='Last Name'>";
        // echo "<input type='text' name = 'n_una' placeholder='eMail'>";
        echo "<button type='submit' name='sub'>Sign In</button>";
        echo "</form><br>";
        echo "<a href='sign.php?'>Sign in</a>";

    } else {
        echo "<h3>Sign in below: </h3><br><br><br><form action='' method='post'>";
        echo "<input type='text' name='una' placeholder='Username'>";
        echo "<input type='password' name='pass' placeholder='Password'>";
        echo "<button type='submit' name='sub'>Sign In</button>";
        echo "</form><br>";
        echo "<a href='sign.php?account=0'>No account? Sign up!</a>";
    }

    if (isset($_POST['sub'])) {
        $username = mysqli_real_escape_string($dbconn, $_POST['una']);
        $password = mysqli_real_escape_string($dbconn, $_POST['pass']);

        $pass = md5($password);
        $check_user = "select * from customers where username='$username' and password='$pass'";

        $run_check = mysqli_query($dbconn, $check_user);
        if (mysqli_num_rows($run_check)) {
            $_SESSION['usssss'] = $username;
            header("location: index.php");
            //echo "<script>window.open('index.php', '_self');</script>";
      
        } else {
            echo "Can't login";
        }
    }

    ?>


</body>

</html>