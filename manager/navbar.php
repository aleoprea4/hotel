<?php
session_start();
?>
<div class="navbar">
      <ul> 
        <li> <a href="index.php"> Home </a> </li>
        <li><a href="#about">Users</a></li>
        <li><a href="rooms.php">Rooms</a></li>
        <li><a href="contact.php">Reservations</a></li>
<?php 
if(!$_SESSION['admin_ses']){
  echo "<li><a href='sign.php'>Sign in</a></li>";
} else {
  echo "<li><a href='profile.php'> {$_SESSION['admin_ses']}</a></li>";
  echo "<li><a href='logout.php'>Sign out</a></li>";
}
?>

        <!-- <li><a href="sign.php">Sign In</a></li> -->
      </ul>
    </div>