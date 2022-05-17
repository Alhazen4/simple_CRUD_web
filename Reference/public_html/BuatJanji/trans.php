<?php 
    session_start();
    
    include("../php/conn.php");
    
    $id_user = $_SESSION['id'];
    
    
    $getid = $_GET['id'];

    $query = "SELECT * FROM doctor WHERE id = $getid";
    $result = mysqli_query($db, $query);

    $fetch = mysqli_fetch_assoc($result);
    $name = $fetch['firsname'] . " " . $fetch['lastname'];
    
    $query2 = "SELECT * FROM user WHERE id = $id_user";
    $result2 = mysqli_query($db, $query2);
    $fetch2 = mysqli_fetch_assoc($result2);
    
    
    $_SESSION['$name'] = $name;
    // $spesialist = $fetch['dept'];
    // $hari = $fetch['hari'];
    // $jam = $fetch['jam'];
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<link rel="stylesheet" href="../src/trans.css" />
		<link rel="stylesheet" href="../src/nav.css" />
		<link rel="stylesheet" href="../src/footer.css" />
		<script src="https://kit.fontawesome.com/0567db93f5.js" crossorigin="anonymous"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Buat Janji</title>
	</head>
	<body>
		<!-- navigasi bar yang di atas -->
		<nav>
			<ul>
				<li class="logo">
					<a href="homepage.php">
						<img src="../assets/images/logorehat.png" alt="logo" />
					</a>
				</li>
				<li class="menu">
					<a href="findoc.php">Daftar Dokter</a>
				</li>
				<li class="menu">
					<a href="cabang.php">Cabang</a>
				</li>
				<li class="menu">
					<a href="buatjanji.php">Buat Janji</a>
				</li>
                <li class="menu profile">
                    <span><img src="../assets/images/profile.png" alt="" /></span>
                    <a href="../Profile/user_profile.php"><?= $fetch2["firstname"] . " " . $fetch2["lastname"]; ?></a>
                </li>
			</ul>
		</nav>

		<main>
			<div class="doc-detail">
				<div class="detail img">
					<img src="assets/images/doctor.png" alt="Doctor <?= $name;?>" width="30px" height="30px" />
				</div>
				<div class="detail sub-detail">
					<ul>
						<li><?= $name;?></li>
						<li>Spec</li>
						<li>tempat lokasi praktek</li>
					</ul>
				</div>
				<div class="detail sub-detail-waktu">
					<ul>
						<li>Jadwal praktek</li>
						<li>Day</li>
						<li>Hours</li>
					</ul>
				</div>
				<div class="detail doc-desc">
					Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla, earum in suscipit
					aut libero ab qui, quia dolor quam ipsam reiciendis tempora explicabo delectus eaque
					tempore perferendis ducimus sapiente beatae?
				</div>
			</div>
			<div class="pas-detail">
				<h2>Form Buat Janji</h2>
				<form action="process.php?name=<?=$name?>&id=<?=$getid?>" method="post">
					<input type="date" name="hari" id="hari" />
					<input type="time" name="jam" id="jam" />
					<label for="harga">Harga: </label></li>
					<input type="number" name="harga" id="harga" placeholder="Harga" /></li>
					<button type="submit" name="janji">Buat Janji</button>
				</form>
			</div>
		</main>

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
				</ul>
			</div>
		</footer>
		<!-- akhir bagian footer -->
	</body>
</html>
