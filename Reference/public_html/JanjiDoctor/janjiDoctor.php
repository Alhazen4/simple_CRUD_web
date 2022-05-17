<?php
	session_start();
	require_once('../php/conn.php');

	if (!isset($_SESSION['id'])) {
		header('Location: signindoc.php');
	}

	$id = $_SESSION['id'];
    // var_dump($id);
    
	// quering and fetching one name doctor using session id
	$queryDoctor = "SELECT firsname, lastname from doctor WHERE id = '$id';";
	$resultDoctor = mysqli_query($db, $queryDoctor);
// 	var_dump($resultDoctor);
	$validDoctor = mysqli_affected_rows($db);
// 	var_dump($validDoctor);
	if ($validDoctor > 0) {
		$fetchDoctor = mysqli_fetch_assoc($resultDoctor);
// 		var_dump($fetchDoctor);
		// concatinating name doctor
		$nameDoctor = $fetchDoctor['firsname'] . " " . $fetchDoctor['lastname'];
	}

	// quering and fetching user match dengan nama doctor
	$query = "SELECT * FROM user WHERE doctor = '$nameDoctor';";
	$result = mysqli_query($db, $query);
	// $valid = mysqli_affected_rows($db);
	// if ($valid > 0) {
	// 	$cek = true;
	// }
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Janji Pasien</title>
		<!-- Required meta tags -->
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

		<!-- Bootstrap CSS v5.0.2 -->
		<link
			rel="stylesheet"
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
			integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
			crossorigin="anonymous"
		/>
		<link rel="stylesheet" href="../src/nav.css" />
	</head>
	<body>
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
					<a href="../ProfileDoctor/doctor_profile.php"
						><?= $fetchDoctor["firsname"] . " " . $fetchDoctor["lastname"]; ?></a
					>
				</li>
			</ul>
		</nav>

		<!-- main content -->
		<div class="container mt-5">
			<table class="table table-striped table-hover table-responsive">
				<thead class="thead-default">
					<tr>
						<th>No ID</th>
						<th>Name</th>
						<th>Phone Number</th>
						<th>Email</th>
						<th>Health Record</th>
						<th>Diagnose</th>
					</tr>
				</thead>
				<tbody>
				<?php while ($fetch = mysqli_fetch_assoc($result)):?>
					<tr>
						<td scope="row"><?= $fetch['id'];?>2</td>
						<td><?= $fetch['firstname'] . " " . $fetch['lastname'];?></td>
						<td><?= $fetch['phonenumber'];?></td>
						<td><?= $fetch['email'];?></td>
						<td><?= $fetch['hr'];?></td>
						<td><?= $fetch['diag'];?></td>
					</tr>
				<?php endwhile;?>
				</tbody>
			</table>
		</div>
		<!-- Bootstrap JavaScript Libraries -->
		<script
			src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
			integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
			crossorigin="anonymous"
		></script>
		<script
			src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
			integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
			crossorigin="anonymous"
		></script>
	</body>
</html>
