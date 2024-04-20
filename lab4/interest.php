<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
  header("location: loggin.php");
  exit;
}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>interest | Fardin Rahman</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Kode+Mono:wght@400..700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" type="text/css" href="styles.css" />
  </head>
  <body>
    
    <header>
      <div class="container">
        <nav class="flex items-center">
          <div class="left flex items-center">
            <div class="logo-picture">
            <a href="index.php">
              <img
              src="Main Logo.png"
                alt="Fardin Rahman's Profile Picture"
                height="100"
                width="150"
              />
              </a>
            </div>

            <?php require 'includes/nav.inc.php' ?>
          </div>
        </nav>
      </div>
      <div class="hero-1 flex items-center">
        <div class="right flex-1">
          <h3>Hobbies</h3>
          <hr>
          <ul class="ul">
            <li>Video Games</li>
            <li>Football</li>
            <li>Chess</li>
          </ul>

          
          
        </div>
        <div class="right-1 flex-1">
          <h3>Games</h3>
          <hr>
          <ul class ="ul">
            <li>Red Dead Redemption</li>
            <li>EA Sports Football 24</li>
            <li>Valorent</li>
            <li>GTA V</li>
          </ul>
        </div>
      </div>
    </header>
  </body>
</html>
