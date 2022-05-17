<?php
    include("../php/conn.php");

    
    if (isset($_POST['janji'])) {
        $hari = $_POST['hari'];
        $jam = $_POST['jam'];
        $keluhan = $_POST['keluhan'];
        var_dump($hari);
        var_dump($jam);
        var_dump($keluhan);
        // var_dump(process($hari, $jam, $keluhan));

        if (process($hari, $jam, $keluhan) > 0) {
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
    
    function process($hari, $jam, $keluhan) {
        global $db;

        // for generating random number for order id
        $orderid = "#" . rand(100000, 999999);
        
        $query = "INSERT INTO transaksi (order_id, hari, jam, keluhan) VALUES ('$orderid', '$hari', '$jam', '$keluhan');";
        
        $result = mysqli_query($db, $query);

        $valid = mysqli_affected_rows($db);
        
        return $valid;
    }


?>