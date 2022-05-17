<?php
    session_start();

    include("../php/conn.php");
    
    $id_user =  $_SESSION['id'];
    var_dump($id_user);
    
    $harga = $_POST['harga'];
    var_dump($harga);
    
    $name = $_GET['name'];
    var_dump($name);
    
    $id = $_GET['id'];
    var_dump($id);
    
    
    if (isset($_POST['janji'])) {
        // $hari = $_POST['hari'];
        // $jam = $_POST['jam'];
        // $keluhan = $_POST['keluhan'];
        // var_dump($hari);
        // var_dump($jam);
        // var_dump($keluhan);
        // var_dump(process($hari, $jam, $keluhan));
        var_dump(processharga($id, $harga));

        if (process($name, $id_user) > 0) {
            processharga($id, $harga);
            // header("Location: janjipage.html");
            echo "<script>";
            echo  "alert('Order anda berhasil di buat, selanjutnya cek email anda');";
            sleep(2);
          // janjipage.php ini untuk pertunjukan saja segara diganti
            echo  "window.location.href='janjipage.php';";
            echo "</script>";
        }else {
            echo "gagal";
        }
    }
    
        
    function processharga($id, $harga) {
        global $db;
        
        $query2 = "UPDATE doctor SET harga = '$harga' WHERE id = $id;";

        $result2 = mysqli_query($db, $query2);

        $valid = mysqli_affected_rows($db);
        
        return $valid;
    }
    
    function process($name, $id_user) {
        global $db;

        // for generating random number for order id
        // $orderid = "#" . rand(100000, 999999);
        
        $query = "UPDATE user SET doctor = '$name' WHERE id = $id_user;";
        
        // $query2 = "UPDATE doctor SET harga = '$harga' WHERE id = $id_user;";
        
        // $query1 = "INSERT INTO doctor (firsname, lastname, password, email, phonenumber, specialist, harga) VALUES('', '', '', '', '', '', '$harga');";
    
        // $result2 = mysqli_query($db, $query2);
        
        $result = mysqli_query($db, $query);

        $valid = mysqli_affected_rows($db);
        
        return $valid;
    }


?>