<?php
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
  $loggedin = true;
} else {
  $loggedin = false;
}



      if(!$loggedin){
        echo '<a href = "loggin.php">login</a>
              <a href="signup.php"> signup</a>
              ';
      }
      if ($loggedin) {
        echo '<a href="index.php">Home</a>
      <a href="skill.php">Skill</a>
      <a href="interest.php">Interest</a>
      <a href="education.php">Education</a>
      <a href="project.php">Project</a>
      <a href="contact.php">Contact</a>';
      echo '<a href="logout.php">Logout</a>';
      }



?>