<?php
session_start();

?>
<div class="navbaradmin">
<ul>
    <?php
    if (!$_SESSION['admin_ses']) {
      echo "You are not allowed to login!";
    } else {
      echo "<li><a href='profile.php'> {$_SESSION['admin_ses']}</a></li>";
      echo "<li><a href='logout.php'>Sign out</a></li>";
      echo "
  
  </ul>
  <ul>
    <li> <a href='index.php'> Home </a> </li>
  </ul>

  <ul>
    <li><a href='rooms.php'>Rooms</a></li>
  </ul>

  <ul>
    <li><a href='reservations.php'>Reservations</a></li>
  </ul>
";
    }
  ?>
</ul>
</div>