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
    <title>project | Fardin Rahman</title>
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
        <div class="hero-1 flex items-center">
          <div class="right flex-1">
            <h3>Academic Projects</h3><hr>
            <ul>
              <li>Hotel Management System</li>
              <ul>
                <li>
                  This project was developed using Java. Java Swing framework
                  was used to develop this project.
                </li>
              </ul>
              <li>ICC T20 WebSite</li>
              <ul>
                <li>
                  This website was developed using Oracle Apex. It was a project
                  for CSE302 course.
                </li>
              </ul>
            </ul>
          </div>
        </div>
      </div>
    </header>
  </body>
</html>
