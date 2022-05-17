<?php 
    session_start();
    require('../php/conn.php');
    
    // query untuk tampilkan doctor
    $queryDoctor = "SELECT * FROM doctor";
    $resultDoctor = mysqli_query($db, $queryDoctor);
    
    $id = $_SESSION['id'];
    
    $query = "SELECT * FROM user WHERE id = $id";
    $result = mysqli_query($db, $query);
    $fetch = mysqli_fetch_assoc($result);

    // validadi query
    $valid = mysqli_affected_rows($db);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/nav.css">
    <link rel="stylesheet" href="../src/footer.css">
    <link rel="stylesheet" href="../src/janji.css">
    <script src="https://kit.fontawesome.com/0567db93f5.js" crossorigin="anonymous"></script>
    <title>Buat Janji</title>
</head>
<body>
    <!-- navigasi bar yang di atas -->
    <nav>
        <ul>
            <li class="logo">
                <a href="../Homepage/index.php">
                    <img src="../assets/images/logorehat.png" alt="logo" />
                </a>
            </li>
            <li class="menu">
                <a href=".../Cabang/cabang.php">Cabang</a>
            </li>
            <li class="menu">
                <a href="../BuatJanji/buatjanji.php">Buat Janji</a>
            </li>
            <li class="menu profile">
                <span><img src="../assets/images/profile.png" alt="" /></span>
                <a href="../Profile/user_profile.php"><?= $fetch["firstname"] . " " . $fetch["lastname"]; ?></a>
            </li>
        </ul>
    </nav>

    <!-- isi konten nya -->
    <main>
        <h1>Buat Janji Dengan Dokter</h1>
        <?php while ($fetch = mysqli_fetch_assoc($resultDoctor)):?>
            <div class="doctor">
                <img src="" alt="" id="doctor-pict">
                <ul id="profilr-doct">
                    <li><?= $fetch['firsname'] . " " . $fetch['lastname'];?></li>
                    <li><?= $fetch['specialist']; ?></li>
                    <li><?= $fetch['id']; ?></li>
                </ul>
                <ul id="jadwal">
                    <li>Hari</li>
                    <li>Jam</li>
                </ul >
                <div class="button">
                    <p><a href="trans.php?id=<?= $fetch['id'];?>">Buat janji</a></p>
                </div>
            </div>
        <?php endwhile;?>
        <!-- <div class="button">
             <h2><a href="trans.php?<?= $fetch['id'];?>"></a></h2>
        </div> -->
    </main>

    <!-- bagian footer -->
    <footer>
        <div class="socmed">
            <ul>
                <li>
                    <i class="fab fa-instagram fa-lg"><a href=""> Instagram</a></i>
                </li>
                <li>
                    <i class="fab fa-facebook-square fa-lg"><a href=""> Facebook</a></i>
                </li>
                <li>
                    <i class="fab fa-twitter fa-lg"><a href=""> Twitter</a></i>
                </li>
            </ul>
        </div>
        <div class="partner">
            <ul>
                <li>
                    <a href=""><img src="../assets/images/mayoclinic.svg" alt="" /></a>
                </li>
                <li>
                    <a href=""><img src="../assets/images/rspelabuhan.png" alt="" /></a>
                </li>
                <li>
                    <a href=""><img src="../assets/images/rsprimaya.png" alt="" /></a>
                </li>
                <li>
                    <a href=""><img src="../assets/images/rstimah.png" alt="" /></a>
                </li>
                <li>
                    <a href=""><img src="../assets/images/siloam.png" alt="" /></a>
                </li>
            </ul>
        </div>
        <div class="contact">
            <ul>
                <li>
                    <i class="fas fa-phone-alt"><a href=""> 119</a></i>
                </li>
                <li>
                    <i class="fas fa-phone-alt"><a href=""> 021 - 1234567</a></i>
                </li>
              	<li>
                    <i class="fas fa-phone-alt"><a href="php/mail.php"> Contact Us</a></i>
                </li>
            </ul>
        </div>
    </footer>
    <script>
        function goto(id) {
            
        }
    </script>
</body>
</html>