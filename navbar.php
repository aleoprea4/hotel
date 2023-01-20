<?php
session_start();
?>
<div class="navbar">
      <ul> 
        <li> <a href="index.php"> Home </a> </li>
        <li><a href="#about">About</a></li>
        <li><a href="rooms.php">Rooms</a></li>
        <li><a href="contact.php">Contact</a></li>
<?php 
if(!$_SESSION['usssss']){
  echo "<li><a href='sign.php?'>Sign in</a></li>";
} else {
  echo "<li><a href='#'> {$_SESSION['usssss']}</a></li>";
  echo "<li><a href='logout.php?'>Sign out</a></li>";
}
?>

        <!-- <li><a href="sign.php">Sign In</a></li> -->
      </ul>
    </div>