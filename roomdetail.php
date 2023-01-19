<?php
include 'navbar.php';
?>
<?php
include 'db/connection.php';

$our_q = "select rooms.*, rclass.* from rooms inner join rclass on rclass.id_class = rooms.room_class where rooms.id_room";
$result = mysqli_query($dbconn, $our_q);

if (mysqli_num_rows($result) > 0) {

  while ($row = mysqli_fetch_assoc($result)) {
    $class_name = $row['name_class'];
    $description = $row['description'];
    $img = $row['thumb'];

    echo "<div class='imgwr'>
        <img src='media/$img' alt='Background'>
        <h4>$class_name</h4>
        <p>$description</p> <br>
        
      </div>";
  }
}
?>