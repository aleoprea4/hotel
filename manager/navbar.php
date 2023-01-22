<?php
session_start();

?>
<div class="navbaradmin">
  <ul>
    <li> <a href="index.php"> Home </a> </li>
  </ul>

  <!-- <ul>
    <li><a href="#about">Users</a></li>
  </ul> -->

  <ul>
    <li><a href="rooms.php">Rooms</a></li>
  </ul>

  <ul>
    <li><a href="reservations.php">Reservations</a></li>
  </ul>

  <ul>
    <?php
    if (!$_SESSION['admin_ses']) {
      echo "<li><a href='sign.php'>Sign in</a></li>";
    } else {
      echo "<li><a href='profile.php'> {$_SESSION['admin_ses']}</a></li>";
      echo "<li><a href='logout.php'>Sign out</a></li>";
    }
    ?>
  </ul>
</div>