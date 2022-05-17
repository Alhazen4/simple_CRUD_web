<?php

    include("conn.php");

    $fname = $_POST['fname'];
    $lname = $_POST['fname'];
    $Nuser = $_POST['Nuser'];
    $Npass = $_POST['Npass'];

    $query = "INSERT INTO userdata VALUES ('$fname', '$lname', '$Nuser', '$Npass')"; 
    $result = mysqli_query($db, $query);

    $validation = mysqli_affected_rows($db);

    if ($valid > 0)
    {
        echo "
        <script> 
        alert ('Registration Success!\nNow please login with your new account!');
        window.location.href='index.html';
        </script>";
    }
?>