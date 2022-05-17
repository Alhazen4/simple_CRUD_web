<?php
include('../php/conn.php');

if (isset($_POST['button'])) {
    
    $curmail = $_POST['curmail'];
    
    $delquery = "DELETE FROM doctor WHERE email = '$curmail';";
    
    $query = mysqli_query($db, $delquery);

    $result = mysqli_affected_rows($db);

    if ($result > 0) {
        echo "<script>";
        echo    "alert('Berhasil menghapus akun anda');";
        echo    "window.location.href='../SignupDoc/signindoc.php';";
        echo  "</script>";
        session_destroy();
        exit;
    }else {
        echo "<script>
                alert('Gagal menghapus akun');
                window.location.href='deleteUIDoc.php';
            </script>";
    }

}