<?php
session_start();
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
include 'navbar.php';
?>

<div class="ind" >
  <ul>
    <h3> Edit available rooms below  </h3> <br> <br> 
  </ul>
</div>
<div class="col" style="width: 100%; text-align: center;" >
        <?php
        include '../db/connection.php';
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
              
                echo "<div class='imgwr'>
                <img src='../media/$img' alt='Background'>
                <h4>Room type: $class_name</h4>
                <p>$description</p> <br>
                <a href='roomanager.php?ourtext=$id_room'>Make changes to this room</a><br>
              </div>";
            }
        }


    
        ?>
    </div>

    <div class="ind" >
  <ul>
    <h3> Create a new room  </h3> <br> <br> 
  </ul>
</div>
<div class="col" style="width: 100%; text-align: center;" >
        <?php
        include '../db/connection.php';
        // if($dbconn){
//             echo "Connected";
// } else {echo "Not working";};
        
      


    
        ?>
    </div>
    
</body>
</html>