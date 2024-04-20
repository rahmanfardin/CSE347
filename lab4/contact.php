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
    <title>contact | Fardin Rahman</title>
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
          <div class="left flex-1 flex justify-center">
            <div class="profile-picture">
              <img
                src="https://i.ibb.co/F799z4P/Screenshot-2024-02-08-150843.png"
                alt="Fardin Rahman's Profile Picture"
              />
            </div>
          </div>
          <div class="right flex-1">
            <h3>Personal Information</h3>
            <hr />
            <table id="table2">
              <thead></thead>
              <tbody>
                <tr>
                  <td>Full Name</td>
                  <td>:</td>
                  <td>Fardin Rahman</td>
                </tr>
                <tr>
                  <td>Father's Name</td>
                  <td>:</td>
                  <td>Azizur Rahman</td>
                </tr>
                <tr>
                  <td>Mother's Name</td>
                  <td>:</td>
                  <td>Shahana Akter</td>
                </tr>
                <tr>
                  <td>Date of Birth</td>
                  <td>:</td>
                  <td>10/04/2002</td>
                </tr>
                <tr>
                  <td>Sex</td>
                  <td>:</td>
                  <td>Male</td>
                </tr>
                <tr>
                  <td>Marital Status</td>
                  <td>:</td>
                  <td>Unmarried</td>
                </tr>
                <tr>
                  <td>Nationality</td>
                  <td>:</td>
                  <td>Bangladeshi</td>
                </tr>
                <tr>
                  <td>Religion</td>
                  <td>:</td>
                  <td>Islam</td>
                </tr>
                <tr>
                  <td>Blood Group</td>
                  <td>:</td>
                  <td>O+</td>
                </tr>
                <tr>
                  <td>Present Address</td>
                  <td>:</td>
                  <td>Dhaka</td>
                </tr>
                <tr>
                  <td>Permanent Address</td>
                  <td>:</td>
                  <td>Dhaka</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </header>
  </body>
</html>
