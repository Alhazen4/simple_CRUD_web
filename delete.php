<?php

    include('conn.php');

    $uname = $_GET['dname'];
    $upass = $_GET['dpass'];

    $query = "DELETE FROM user_data WHERE uname = '$uname';";
    $result = mysqli_query($db, $query);

    $validation = mysqli_affected_rows($db);
    if ($validation > 0)
    {
        echo "<script>";
        echo "alert ('Successful Delete Account!');";
        echo "window.location.href='index.html'";
        echo "</script>";
    }
?>