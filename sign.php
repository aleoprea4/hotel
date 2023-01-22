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
        echo "<input type='text' name='n_fna' placeholder='First Name'>";
        echo "<input type='text' name='n_lna' placeholder='Last Name'>";
        echo "<input type='text' name='n_una' placeholder='Username'>";
        echo "<input type='password' name='n_pass' placeholder='Password'>";
        // echo "<input type='text' name = 'n_una' placeholder='eMail'>";
        echo "<button type='submit' name='n_sub'>Sign In</button>";
        echo "</form><br>";
        echo "<a href='sign.php'>Already have an account? Sign in!</a>";

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
        $check_admin ="select * from auth_user";

        $run_check = mysqli_query($dbconn, $check_user);
        $run_admin = mysqli_query($dbconn, $check_admin);

        if (mysqli_num_rows($run_admin)) {
            $_SESSION['admin_ses'] = $username;
            header("location: ../manager/index.php");
            //echo "<script>window.open('index.php', '_self');</script>";
        }  else{
            $_SESSION['usssss'] = $username;
            header("location: index.php");
            //echo "<script>window.open('index.php', '_self');</script>";
      
        } 

        if (mysqli_num_rows($run_check)) {
            $_SESSION['usssss'] = $username;
            header("location: index.php");
            //echo "<script>window.open('index.php', '_self');</script>";
      
        } else {
            echo "Can't login";
        }
    }

    if (isset($_POST['n_sub'])) {
        $n_username = mysqli_real_escape_string($dbconn, $_POST['n_una']);
        $n_password = mysqli_real_escape_string($dbconn, $_POST['n_pass']);
        $firstname = mysqli_real_escape_string($dbconn, $_POST['n_fna']);
        $lastname = mysqli_real_escape_string($dbconn, $_POST['n_lna']);

        $n_pas = md5($n_password);
        $check_user_exist = "select * from customers where username='$n_username' and password='$n_pas'";

        $run_check_exist = mysqli_query($dbconn, $check_user_exist);
        if (mysqli_num_rows($run_check_exist)) {
            echo "Please choose a different username! This one is not available!";
            // $_SESSION['usssss'] = $n_username;
            // header("location: index.php");
            //echo "<script>window.open('index.php', '_self');</script>";
      
        } else {
            $n_q = "insert into customers(first_name,last_name,username,password) values(?,?,?,?)";
            $insert = mysqli_prepare($dbconn, $n_q);
            mysqli_stmt_bind_param($insert, 'ssss', $fn, $ln, $un, $ps);
            $fn = $firstname;
            $ln = $lastname;
            $un = $n_username;
            $ps = $n_pas;
            $in = mysqli_stmt_execute($insert);
            if($in){
                echo "Hello, " . $n_username . " you can use the sign in form to log in";
                echo "<a href='sign.php'> Already have an account? Sign in!</a>";
            }
        }
    }

    ?>


</body>

</html>