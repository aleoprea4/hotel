<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title> Starting with html </title>
    <link rel="stylesheet" href="layout.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style media="screen">
      h1{
        font-size: 40px;
      }
    </style>

  </head>

  <body>
    <header class="ourClass">
      <h1>Welcome to your hotel website</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <?php 
    $first_number = 187;
    $second_number = 5221;
    
    echo "Second no is: $second_number" . $first_number . "is the 1st" ;
    ?>  
    </header>

    <div class="navbar">
      <ul> 
        <li> <a href="#"> Home </a> </li>
        <li><a href="#about">About</a></li>
        <li><a href="pages/contact.html">Contact</a></li>
      </ul>
    </div>

    <div class="ourParallax">
      <h4>This is just to show the parallax</h4>
    </div>

    <div class="col" style="width: 100%; text-align: center;">
      <div class="imgwr">
        <img src="media/background.jpg" alt="Background">
        <h4>Room - type</h4>
        <p>Text about rooms</p> <br>
        <button type="button" name="button">Reserve room</button>
      </div>
      <div class="imgwr">
        <img src="media/background.jpg" alt="Background">
        <h4>Room - type</h4>
        <p>Text about rooms</p><br>
        <button type="button" name="button">Reserve room</button>
      </div>
      <div class="imgwr">
        <img src="media/background.jpg" alt="Background">
        <h4>Room - type</h4>
        <p>Text about rooms</p><br>
        <button type="button" name="button">Reserve room</button>
      </div>
      <div class="imgwr">
        <img src="media/background.jpg" alt="Background">
        <h4>Room - type</h4>
        <p>Text about rooms</p><br>
        <button type="button" name="button">Reserve room</button>
      </div>
      <div class="imgwr">
        <img src="media/background.jpg" alt="Background">
        <h4>Room - type</h4>
        <p>Text about rooms</p><br>
        <button type="button" name="button">Reserve room</button>
      </div>
      <div class="imgwr">
        <img src="media/background.jpg" alt="Background">
        <h4>Room - type</h4>
        <p>Text about rooms</p><br>
        <button type="button" name="button">Reserve room</button>
      </div>
      <div class="imgwr">
        <img src="media/background.jpg" alt="Background">
        <h4>Room - type</h4>
        <p>Text about rooms</p><br>
        <button type="button" name="button">Reserve room</button>
      </div>
    </div><!--the end of the col div-->

    <a name="about"></a>
    <div class="container">
      <img src="media/bkg.png" alt="yes">
      <div class="mynewdiv">
        <div class="centerforme">
          About us
        </div>
      </div><!--mynewdiv-->
    </div><!--the end of container-->


    <footer>
      <p>&copy; Copyright | OurNewWebsite</p>
    </footer>
  </body>
</html>
