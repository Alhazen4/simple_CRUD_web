<?php

    include("conn.php");

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $Nuser = $_POST['Nuser'];
    $Npass = $_POST['Npass'];

    $query = "INSERT INTO user_data VALUES ('', '$fname', '$lname', '$Nuser', '$Npass')"; 
    $result = mysqli_query($db, $query);

    $validation = mysqli_affected_rows($db);

    if (empty($fname) && empty($lname) && empty($Nuser) && empty($Npass) )
    {
        echo "<script> alert ('Please fill the form correctly!');
        window.location.href='index.html'; </script>";
    }
    else
    {
        if ($validation > 0)
        {
            echo "<script> alert ('Registration Success!');
            alert ('Now, login with your new account!'); 
            window.location.href='index.html'; </script>";
        }
    }
?>