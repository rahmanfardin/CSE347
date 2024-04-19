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
    <title>education | Fardin Rahman</title>
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
    <?php require 'includes/nav.inc.php' ?>
    <header>
      <div class="container">
        <nav class="flex items-center">
          <div class="left flex items-center">
            <div class="logo-picture">
              <img
              src="Main Logo.png"
                alt="Fardin Rahman's Profile Picture"
                height="100"
                width="150"
              />
            </div>

            <a href="index.php">Home</a>
            <a href="skill.php">Skill</a>
            <a href="interest.php">Interest</a>
            <a href="education.php">Education</a>
            <a href="project.php">Project</a>
            <a href="contact.php">Contact</a>
          </div>
        </nav>
        <div class="hero flex items-center">
          <div class="right flex-1">
            <h3>Career Objectives</h3>
            <hr>
            <p>To go into Development sector</p>
          </div>
          <div class = "right-1 flex-1">
            <table id="table1">
              <h3>Educational Background</h3>
              <hr>
              <thead>
                <tr>
                  <th>Exam</th>
                  <th>Board/University</th>
                  <th>year</th>
                  <th>Name of institution</th>
                  <th>Marks</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th>SSC</th>
                  <th>Dhaka</th>
                  <th>2019</th>
                  <th>RCPSC</th>
                  <th>A+</th>
                </tr>
                <tr>
                  <th>HSC</th>
                  <th>Dhaka</th>
                  <th>2021</th>
                  <th>RCPSC</th>
                  <th>A+</th>
                </tr>
                <tr>
                  <th>BSc</th>
                  <th>East West University</th>
                  <th>2025</th>
                  <th>East West University</th>
                  <th>3.7</th>
                </tr>
              </tbody>
            </table>
      
          </div>
        </div>
      </div>
    </header>

    
  </body>
</html>
