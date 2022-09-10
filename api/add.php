<?php
    include 'dbconfig.php';

    $name = $_POST['name'];
    $link = $_POST['link'];

    $sql = "INSERT INTO menu_dropdown (name, link) VALUES ('$name', '$link')";
    $query = mysqli_query($dbcon, $sql);

    if($query) {
        header("Location: ../index.php");
    } else {
        echo "Can't insert data.";
    }
?>