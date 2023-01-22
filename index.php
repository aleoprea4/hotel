<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <title> The M hotels</title>
      <link rel="stylesheet" href="layout.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <style media="screen">
        h1 {
          font-size: 40px;
        }
      </style>

</head>

<body>
  <header class="ourClass">
    <h1>Welcome to The M hotel</h1>
    <p>Best hotel in the world</p>

  </header>
  <?php
  include 'navbar.php';
  ?>

  <div class="ourParallax">
    <h4>The M hotel</h4>
  </div>

  <div class="col" style="width: 75%; text-align: center;">
    <?php
    include 'db/connection.php';
    // if($dbconn){
//             echo "Connected";
// } else {echo "Not working";};
    
    $our_q = "select rooms.*, rclass.* from rooms inner join rclass on rclass.id_class = rooms.room_class";
    $result = mysqli_query($dbconn, $our_q);

    if (mysqli_num_rows($result) > 0) {

      while ($row = mysqli_fetch_assoc($result)) {
        $id_room = $row['id_room'];
        $number = $row['room_num'];
        $capacity = $row['capacity'];
        $img = $row['thumb'];
        $class_name = $row['name_class'];
        $description = $row['description'];
      //  echo "rooms " . $number;

        echo "<div class='imgwr'>
                <img src='media/$img' alt='Background'>
                <h4>$class_name</h4>
                <p>$description</p> <br>
                <a href='roomdetail.php?ourtext=$id_room'>Reserve room</a><br>
              </div>";
      }
    }
    ?>
  </div>
  <a name="about"></a>
  <div class="container">
    <img src="media/bkg.png" alt="yes">
    <div class="mynewdiv">
      <div class="centerforme">
        About us
      </div>
    </div>
    <!--mynewdiv-->
  </div>
  <!--the end of container-->


  <footer>
 <br>   <p>&copy; Copyright | OurNewWebsite</p>
  </footer>
</body>

</html>