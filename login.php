<?php

    include("conn.php");

    session_start();

    $user = $_GET['user'];
    $pass = $_GET['pass'];

    $query = "SELECT id FROM user_data WHERE uname = '$user' and pass = '$pass'";
    $result = mysqli_query($db, $query);
    
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    
    $count = mysqli_affected_rows($db);

    if (empty($user) && empty($pass))
    {
        echo "<script> alert ('Please fill the Username and Password!');
        window.location.href='index.html'; </script>";
    }
    else
    {
        if ($count > 0)
        {
            header('Location: homepage.php');
            $_SESSION['id'] = $row['id'];
        }
        else {
            echo "<script> alert ('Login Failed!'); 
            window.location.href='index.html'; </script>";
        }
    }
?>