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
    <title>skill | Fardin Rahman</title>
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
        <div class="hero flex items-center">
          <div class="right flex-1 flex justify-center">
            <h3>Computer Skills</h3>
            <hr />
            <table align="center">
              <tbody>
                <tr>
                  <td>Programming Skills</td>
                  <td>:</td>
                  <td>0</td>
                </tr>
                <tr>
                  <td>Web based skills</td>
                  <td>:</td>
                  <td>0</td>
                </tr>
                <tr>
                  <td>Database Skills</td>
                  <td>:</td>
                  <td>0</td>
                </tr>
                <tr>
                  <td>Scripting Skills</td>
                  <td>:</td>
                  <td>0</td>
                </tr>
                <tr>
                  <td>Development Tools</td>
                  <td>:</td>
                  <td>0</td>
                </tr>
                <tr>
                  <td>Others</td>
                  <td>:</td>
                  <td>0</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="right-1">
            <h3>Professional Experience</h3>
            <p>I have not yet worked for any company.</p>
          </div>
        </div>
        
      
    </header>
  </body>
</html>
