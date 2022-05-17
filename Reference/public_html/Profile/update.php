<?php 
include('../php/conn.php');

if (isset($_POST['button'])) {
    $upmail = $_POST['umail'];
    $curmail = $_POST['curmail'];

    $query = "UPDATE user SET email = '$upmail' WHERE email = '$curmail';";
    $result = mysqli_query($db, $query);

    $valid = mysqli_affected_rows($db);
    // var_dump($valid);

    if ($valid > 0) {
        echo "<script>
                alert('Berhasil Update');
                window.location.href='user_profile.php';
            </script>";
    }else {
        echo "<script>";
        echo    "alert('Gagal Update');";
        echo mysqli_error($db);
        sleep(10);
        echo    "window.location.href='update.php';";
        echo    "</script>";
    }
}