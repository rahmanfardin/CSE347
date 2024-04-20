<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
  header("location: loggin.php");
  exit;
}


?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Kode+Mono:wght@400..700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" type="text/css" href="styles.css" />
    

  <title>Welcome - <?php echo $_SESSION['username'] ?></title>
</head>

<body>
  <?php #require 'includes/nav.inc.php' ?>

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
        <div class="hero flex items-center">
          <div class="left flex-1 flex justify-center">
            <div class="profile-picture">
              <img
                src="https://i.ibb.co/F799z4P/Screenshot-2024-02-08-150843.png"
                alt="Fardin Rahman's Profile Picture"
              />
            </div>
          </div>
          <div class="right flex-1">
            <h3>Fardin Rahman</h3>
            <h1>I'm a Student at <span>EWU</span></h1>
            <p>
              I am currently studing BSc at East West University. I live in Rampura.
            </p>
          </div>
        </div>
      </div>
    </header>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
</body>

</html>