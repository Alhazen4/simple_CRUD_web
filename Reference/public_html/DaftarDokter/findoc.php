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
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="../src/nav.css" />
		<link rel="stylesheet" href="../src/footer.css" />
		<link rel="stylesheet" href="../src/daftardokter.css" />
		<script src="https://kit.fontawesome.com/0567db93f5.js" crossorigin="anonymous"></script>
		<title>Daftar Dokter</title>
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
					<a href="../DaftarDokter/findoc.php">Daftar Dokter</a>
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

		<main>
			<div class="content">
				<div class="title">
					<h1>DAFTAR DOKTER</h1>
				</div>

				<form action="" method="POST">
					<select name="doctor" onchange="showDoctor(this.value)">
						<option value="">Select a Doctor:</option>
						<option value="fajar">Dr. Fajar</option>
						<option value="ardi">Dr. Lazuardi</option>
						<option value="rayhand">Dr. Rayhand</option>
					</select>

					<div>The Doctor's info will be show under here!</div>
				</form>
			</div>
			<div id="infodoctor"></div>
          
          <div class="btn_room">
          	<a href=sorting.html>Click To Search The Room Services</a>
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

		<script>
			function showDoctor(dctr) {
				var data = new XMLHttpRequest();
				data.onload = function () {
					document.getElementById("infodoctor").innerHTML = this.responseText;
				};
				data.open("POST", "php/datadoc.php?doctor=" + dctr);
				data.send();
			}
		</script>
	</body>
</html>
