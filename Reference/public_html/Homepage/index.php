<?php
	session_start();
	require_once("../php/conn.php");

	if (!isset($_SESSION['id'])) {
		header('Location: ../Signup/signin.php');
	}
	
	$id = $_SESSION['id'];
	
	$query = "SELECT * FROM user WHERE id = $id";
    $result = mysqli_query($db, $query);
    $fetch = mysqli_fetch_assoc($result);
	
// 	var_dump($_SESSION['id']);

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="../src/nav.css" />
		<link rel="stylesheet" href="../src/home.css" />
		<link rel="stylesheet" href="../src/footer.css" />
		<script src="https://kit.fontawesome.com/0567db93f5.js" crossorigin="anonymous"></script>
		<title>Rumah Sakit</title>
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
					<a href="../Cabang/cabang.php">Cabang</a>
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
			<!-- ini moto rumah sakitnya -->
			<div class="motto">
				<h1>Kesehatan Anda, Number Uno!</h1>
			</div>

			<!-- ini search bar nya -->
			<div class="search-bar">
				<form action="" method="get">
					<input type="search" name="" id="" placeholder="Pencarian" />
					<button type="submit" name="search">Search</button>
				</form>
			</div>

			<!-- ini yang gambar rumah sakit -->
			<section class="main">
				<div class="card-main-pict">
					<img src="../assets/images/hospital.jpeg" alt="hospital" />
					<!--tulisan caption foto-->
					<div class="card-caption">
						<p>
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo qui odit totam
							reprehenderit nemo. Mollitia magni exercitationem officia fugit in aliquid, hic
							dignissimos qui commodi amet aperiam rem animi quaerat?
						</p>
					</div>
				</div>

				<!-- ini sidebar nya, isinya mungkin informasi -->
				<aside class="sidebar">
					<h2>Information</h2>
					<ul>
						<li>Dokter Ardi meraih nobel pada tahun 2035</li>
						<li>Dokter Rayhand meraih penghargaan internasional dalam spesialisasi kulit</li>
						<li>ReHat akan segera membuka cabang rumah sakit baru di daerah papua</li>
						<li>Karantina Covid-19 di ReHat</li>
						<li>Pengumuman jadwal praktek jalan selama Covid-19</li>
					</ul>
				</aside>
			</section>

			<!-- ini buat baris higlihgt dokter dokter nya -->
			<div class="doctor-list">
				<h2>Honorable Doctor</h2>
				<ul>
					<li>
						<div class="doc-highlight">
							<img src="../assets/images/hospital.jpeg" alt="hospital" />
							<!--tulisan caption foto-->
							<div class="card-caption">
								<p>
									Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo qui odit
									totam reprehenderit nemo. Mollitia magni exercitationem officia fugit in
									aliquid, hic dignissimos qui commodi amet aperiam rem animi quaerat?
								</p>
							</div>
						</div>
					</li>
					<li>
						<div class="doc-highlight">
							<img src="../assets/images/hospital.jpeg" alt="hospital" />
							<!--tulisan caption foto-->
							<div class="card-caption">
								<p>
									Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo qui odit
									totam reprehenderit nemo. Mollitia magni exercitationem officia fugit in
									aliquid, hic dignissimos qui commodi amet aperiam rem animi quaerat?
								</p>
							</div>
						</div>
					</li>
					<li>
						<div class="doc-highlight">
							<img src="../assets/images/hospital.jpeg" alt="hospital" />
							<!--tulisan caption foto-->
							<div class="card-caption">
								<p>
									Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo qui odit
									totam reprehenderit nemo. Mollitia magni exercitationem officia fugit in
									aliquid, hic dignissimos qui commodi amet aperiam rem animi quaerat?
								</p>
							</div>
						</div>
					</li>
					<li>
						<div class="doc-highlight">
							<img src="../assets/images/hospital.jpeg" alt="hospital" />
							<!--tulisan caption foto-->
							<div class="card-caption">
								<p>
									Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo qui odit
									totam reprehenderit nemo. Mollitia magni exercitationem officia fugit in
									aliquid, hic dignissimos qui commodi amet aperiam rem animi quaerat?
								</p>
							</div>
						</div>
					</li>
				</ul>
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
                  	<li>
						<i class="fas fa-phone-alt"><a href="php/mail.php"> Contact Us</a></i>
					</li>
				</ul>
			</div>
		</footer>
		<!-- akhir bagian footer -->
	</body>
</html>
