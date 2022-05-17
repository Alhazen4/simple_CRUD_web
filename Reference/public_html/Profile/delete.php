<?php
include('../php/conn.php');

if (isset($_POST['button'])) {
    
    $curmail = $_POST['curmail'];
    
    $delquery = "DELETE FROM user WHERE email = '$curmail';";
    
    $query = mysqli_query($db, $delquery);

    $result = mysqli_affected_rows($db);

    if ($result > 0) {
        echo "<script>";
        echo    "alert('Berhasil menghapus akun anda');";
        session_destroy();
        echo    "window.location.href='../Signup/signin.html';";
        echo  "</script>";
        exit;
    }else {
        echo "<script>
                alert('Gagal menghapus akun');
                window.location.href='../delete.php';
            </script>";
    }

}