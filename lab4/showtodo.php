<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: loggin.php");
    exit;
} else {
    $id = $_SESSION["username"];
}
include "includes/db.inc.php";
$haveResult = false;

$sql = "SELECT `id`, `username`, `title`, `text` FROM `todo` WHERE `username` = '$id'";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);
if ($num > 0) {
    $haveResult = true;
} else {
    $haveResult = false;
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

    <title><?php echo "$id" . "'s todo"; ?></title>
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
                    <h3>todo list</h3>
                    <hr>
                    <a class='btn btn-primary btn-sm mx-2 my-2' href="todo.c.php">create</a>
                    <?php
                    if ($haveResult) {
                        echo '
                    <table id="table1">
                        <thead>
                            <tr>
                                <th>username</th>
                                <th>title</th>
                                <th>text</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody>';

                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>
                                    <td>$row[username]</td>
                                    <td>$row[title]</td>
                                    <td>$row[text]</td>
                                    <td>
                                    <a class ='btn btn-primary btn-sm' href=todo.e.php?id=$row[id]>edit</a> 
                                    <a class ='btn btn-danger btn-sm' href=todo.d.php?id=$row[id]>delete </a>
                                    </td>
                                    </tr>";
                        }
                    }
                    ?>
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </header>
</body>

</html>