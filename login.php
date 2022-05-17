<?php

    include("conn.php");

    $user = $_GET['user'];
    $pass = $_GET['pass'];

    $query = "SELECT id FROM userdata WHERE username = '$user' and pass = '$pass'";
    $result = mysqli_query($db, $query);
    $count = mysqli_affected_rows($db);

    if (count > 0)
    {
        header('Location: homepage.html');
    }
    else {
        echo "<script> alert('Username or Password doesn't exist!')</script>"
    }
?>