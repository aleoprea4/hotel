<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title> Contact </title>
    <link rel="stylesheet" href="../layout.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style media="screen">
      h1{
        font-size: 40px;
      }
    </style>

  </head>

  <body>

  <?php
    include 'navbar.php';
    ?>

    <div class="contactform">
      <form class="ourform" action="" method="post">
        <div class="ourfields">
          <input type="text" name="una" placeholder="Username" id="usr">
          <label for="usr">Username</label>
        </div>
        <div class="ourfields">
          <input type="email" name="em" placeholder="Email" id="email">
          <label for="email">Email</label>
        </div>
        <div class="ourfields">
          <textarea name="txt" rows="8" cols="80" placeholder="Add your text here..." id="txta"></textarea>
          <label for="txta">Your text here</label>
        </div>
        <div  style="text-align: center;">
          <button type="submit" name="button">Click me</button>
        </div>
      </form>
    </div>

    <div class="newContainer">
      <img src="../media/background.jpg" alt="ad" class="image">
      <div class="overlay">
        <div class="text">
          You can add text
        </div>
      </div>
    </div>





    <footer>
      <p>&copy; Copyright | OurNewWebsite</p>
    </footer>
  </body>
</html>
