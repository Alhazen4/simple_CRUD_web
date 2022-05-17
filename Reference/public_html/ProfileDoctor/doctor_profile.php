<?php
    session_start();
    require_once('../php/conn.php');

    $id = $_SESSION['id'];

	if (!isset($id)) {
		header('Location: signindoc.php');
	}

    // get data from database the same as session id
    $query = "SELECT * FROM doctor WHERE id = $id";
    $result = mysqli_query($db, $query);
    $fetch = mysqli_fetch_assoc($result);
    $valid = mysqli_affected_rows($db);
    // var_dump($id);
    // var_dump($fetch);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../src/nav.css" />
    <link rel="stylesheet" href="../src/profile.css">
	<link rel="stylesheet" href="../src/footer.css" />
	<script src="https://kit.fontawesome.com/0567db93f5.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>

<body>
		<!-- navigasi bar yang di atas -->
		<nav>
			<ul>
				<li class="logo">
					<a href="../HomeDoctor/indexDoctor.php">
						<img src="../assets/images/logorehat.png" alt="logo" />
					</a>
				</li>
				<li class="menu">
					<a href="../JanjiDoctor/janjiDoctor.php">Janji Temu</a>
				</li>
				<li class="menu profile">
					<span><img src="../assets/images/profile.png" alt="" /></span>
					<a href="../ProfileDoctor/doctor_profile.php"><?= $fetch["firsname"] . " " . $fetch["lastname"];?></a>
				</li>
			</ul>
		</nav>
    
        
    <main>
        <h1 class="title">Profile</h1>

        <div class="main-profile">
            <div class="img">
                <img src="../assets/images/avatar.png" id="output" alt="Profile Pict">
                <!--<input type="file" name="upimg" id="upimg" onchange="loadImage(event)">-->
                <!--<button type="submit" onclick="upload()">Change Photo</button>-->
                <p><a href="upmailDoc.php">Edit Account</a></p>
                <p><a href="deleteUIDoc.php">Delete Account</a></p>
              	<p><a href="logoutDoc.php">Log Out</a></p>
            </div>
            <div class="bio">
                <ul>
                    <li class="sub-title">Biodata Diri</li>
                    <li>Nama: <?= $fetch["firsname"] . " " . $fetch["lastname"];?></li>
                    <li>Gol. Darah: <?= "-"; ?></li>
                    <li>Umur: <?= "-"; ?></li>
                </ul>
            </div>
            <!--<div class="sub-bio">-->
            <!--    <ul>-->
            <!--        <li class="sub-title">Data Kesehatan</li>-->
            <!--        <li>NIK: <?= "-"; ?></li>-->
            <!--        <li>No. Kesehatan: <?= "-"; ?></li>-->
            <!--        <li>ID User: <?= $fetch["id"]; ?></li>-->
            <!--    </ul>-->
            <!--</div>-->
        </div>
        <!--<div class="riwayat">-->
        <!--    <div class="card">-->
        <!--        <ul>-->
        <!--            <li><h3>Riwayat Pemeriksaan</h3></li>-->
        <!--            <li>Tanggal: 02/10/2021</ll>-->
        <!--            <li>Hasil Diagnosa: <?= $fetch["hr"]; ?></li>-->
        <!--            <li>Solusi: Istirahat</li>-->
        <!--        </ul>-->
        <!--    </div>-->
        <!--</div>-->
    </main>
    
    <br><br><br><br><br><br>



    <!-- Bagian footer -->
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
		<!-- akhir bagian footer -->
    <script>
        function loadImage(event) {
            var image = document.getElementById('output');
            image.src = URL.createObjectURL(event.target.files[0]);
        }
        
        function upload() {
            let photo = document.getElementById("upimg").files[0]; //file input
            let req = new XMLHttpRequest();
            let formData = new FormData();
            formData.append("photo", photo);                                
            req.open("POST", "uplimg.php", true);
            req.send(formData);
            req.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                  alert(this.responseText);
                }
            }
        }
    </script>
</body>
</html>