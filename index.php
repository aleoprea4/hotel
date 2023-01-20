<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <title> Starting with html </title>
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
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
      magna aliqua. </p>
    <?php
    $first_number = 187;
    $second_number = 5221;

    echo "Second no is: $second_number" . $first_number . "is the 1st";
    ?>
  </header>
  <?php
  include 'navbar.php';
  ?>

  <div class="ourParallax">
    <h4>Hotel website</h4>
  </div>

  <div class="col" style="width: 100%; text-align: center;">
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
        echo "rooms " . $number;

        echo "<div class='imgwr'>
                <img src='media/$img' alt='Background'>
                <h4>$class_name</h4>
                <p>$description</p> <br>
                <a href=\"roomdetail.php?ourtext=$id_room\">Reserve room</a>
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
      <p>&copy; Copyright | OurNewWebsite</p>
    </footer>
</body>

</html>