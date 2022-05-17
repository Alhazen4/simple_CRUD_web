<?php

    session_start();
    include("../php/conn.php");
    
    // var_dump($db);
    
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $pnumber = $_POST['pnumber'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    
    // var_dump($fname);
    // var_dump($lname);
    // var_dump($pnumber);
    // var_dump($email);
    // var_dump($pass);

    // first check user data input
    $select = "SELECT * FROM user";
    
    $resultselect = mysqli_query($db, $select);
    
    $fetch = mysqli_fetch_assoc($resultselect);
    var_dump($fetch);
    
    // cek if email sudah ada atau tidak dan nomor telepon sudah ada atau tidak
    // if ($fetch['email'] == $email && $fetch['phonenumber'] == $pnumber) {
        // echo "gagal 1";
        // $a = true;
        // echo "<script>
        //         alert('Akun email dan nomor telpon anda sudah terdaftar');
        //         window.location.href='signup.html';
        //     </script>";
        // exit;
    // }
    // elseif ($fetch['email'] == $email) {
        // echo "gagal 2";
        // echo "<script>
        //         alert('Akun email anda sudah terdaftar');
        //         window.location.href='signup.html';
        //     </script>";
        //     // sleep(3);
        //     // header("Location: ../signup.html");
        //     exit;
    // }elseif ($fetch['phonenumber'] == $pnumber) {
        // echo "gagal 3";
        // echo "<script>
        //         alert('Nomor telepon anda sudah terdaftar');
        //         window.location.href='signup.html';
        //     </script>";
        //     // sleep(3);
        //     // header("Location: ../signup.html");
        //     exit;
    // }
    // else{
        echo "gagal 4";
        
        $query = "INSERT INTO user (firstname, lastname, phonenumber, email, password, status, hr, diag, doctor) VALUES('$fname', '$lname', '$pnumber', '$email', '$pass', '', '', '', 0);";
        
        var_dump($query);
        
        $result = mysqli_query($db, $query);
        
        var_dump($result);
        
        $valid = mysqli_affected_rows($db);
        var_dump($valid);

        // cek if registrasi berhasil atau tidak
        // if ($valid > 0) {
        //     echo "berhasil";
            // $a = true;
            // echo "<script>
            //         alert('Sukses Registrasi!');
            //         window.location.href='signin.php';
            //     </script>";
            //     sleep(3);
            //     if ($a) {        
            //     header('Location: ../homepage.html');
            // }
        // }
        
        // else {
        //     mysqli_error($db);
        //     // echo "<script>
        //     //         alert('TIDAK BERHASIL REGISTRASI! SILAKAN COBA KEMBALI!');
        //     //         window.location.href='signup.html';
        //     //     </script>";
        //     // header('Location: ../signup.html');
        // }
    // }

    // function move() {
    //     // sleep(3);
    //     header('Location:../signup.html');
    //     $values = "<script>alert('anda salah, silakan PULANG!!!');</script>";
    //     echo $values;
    //     exit;
    // }
?>