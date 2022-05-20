<?php

    include("conn.php");

    $old_pass = $_GET["uopass"];
    $new_pass = $_GET["unpass"];

    $query = "UPDATE user_data SET pass = '$new_pass' WHERE pass = '$old_pass'; ";
    $result = mysqli_query($db, $query);

    $validation = mysqli_affected_rows($db);
    if ($validation > 0)
    {
        echo "<script> alert ('Update Password Success!');
        alert ('Now, login with your new password!'); 
        window.location.href='index.html'; </script>";
    }

?>