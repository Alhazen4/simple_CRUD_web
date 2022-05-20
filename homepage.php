<?php
    session_start();
    include 'conn.php';

    $id = $_SESSION['id'];

    $query = "SELECT * FROM user_data WHERE id = $id";
    $result = mysqli_query($db, $query);
    $fetch = mysqli_fetch_assoc($result); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="homepage.css">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>
    <div id="nav-placeholder"></div>

    <div class="welcome_page">
        <div class="welcome_col">
            <h1>Hello, <?= $fetch['fname'] . " " . $fetch['lname'];?> !</h1>
            <h1>YOU ARE LOGGED ON!</h1>
            <br>
            <br>
            <br>
            <h2>This page made by: Alhazen4</h2>
        </div>

        <div class="welcome_col">
            <img src="src/dinoFlip.png" alt="Dino">
        </div>
    </div>
</body>

<script>
    $(function(){
        $("#nav-placeholder").load("nav.html");
    });

</script>
</html>