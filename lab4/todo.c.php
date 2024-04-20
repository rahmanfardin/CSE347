<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: loggin.php");
    exit;
} else {
    $id = $_SESSION["username"];
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    $text = $_POST["txt"];
    $errorMsg = "";
    $sMsg = "";
    include 'includes/db.inc.php';
    do {
        if(empty($title) or empty($text)){
            $errorMsg = "Please enter all the fields";
            break;
        }

        $sql = "INSERT INTO `todo`( `username`, `title`, `text`) VALUES ('$id','$title','$text')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $sMsg = "inserted currectly";
        }
        header("Location: showtodo.php");
        exit;
    } while (false);
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

    <title><?php echo "$id" . "'s make todo"; ?></title>
</head>

<body>

    <header>
        <div class="container">
            <nav class="flex items-center">
                <div class="left flex items-center">
                    <div class="logo-picture">
                        <a href="index.php">
                            <img src="Main Logo.png" alt="Fardin Rahman's Profile Picture" height="100" width="150" />
                        </a>
                    </div>

                    <?php require 'includes/nav.inc.php' ?>
                </div>
            </nav>
            <div class="hero-1 flex items-center">
                <div class="right flex-1">
                <div class="container my-4">
                    <h1 class="text-center" style="color:white;">make a todo</h1>
                    <form action="todo.c.php" method="post">
                        <div class="form-group">
                            <label for="title" style="color:white;">title</label>
                            <input type="text" class="form-control" id="title" name="title">

                        </div>
                        <div class="form-group">
                            <label for="text" style="color:white;">text</label>
                            <input type="txt" class="form-control" id="txt" name="txt">

                        </div>
                        <?php
                        if (!empty($sMsg)) {
                            echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> Your data has been inserted
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div> ';}
            if (!empty($errorMsg)) {
                echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error!</strong> ' . $errorMsg . '
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div> ';
            }
                        ?>

                        <button type="submit" class="btn btn-primary">SUBMIT</button>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </header>
</body>

</html>