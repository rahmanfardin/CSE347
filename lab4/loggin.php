<?php
$login = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'includes/db.inc.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
    $hashed_password = hash('sha256', $password);

    $sql = "Select * from USERTABLE where username='$username' AND password='$hashed_password'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1) {
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("location: index.php");
    } else {
        $showError = "Invalid Credentials";
    }
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
    <link href="https://fonts.googleapis.com/css2?family=Kode+Mono:wght@400..700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="styles.css" />

    <title>Login</title>
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
            <div>
                <?php
                if ($login) {
                    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> You are logged in
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
                }
                if ($showError) {
                    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> ' . $showError . '
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
                }
                ?>

                <div class="container my-4">
                    <h1 class="text-center" style="color:white;">Login to our website</h1>
                    <form action="loggin.php" method="post">

                        <label for="username" style="color:white;">Username</label>
                        <input type="text" class="form-control" id="username" name="username"
                            aria-describedby="emailHelp" placeholder="username">



                        <label for="password" style="color:white;">Password</label>
                        <input type="password" class="form-control" id="password" name="password">

                        <button type="submit" class="btn btn-primary my-4" margin = 3px>Login</button>
                    </form>
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