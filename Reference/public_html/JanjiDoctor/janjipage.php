<?php
	include("../php/conn.php");

	$query = "SELECT order_id FROM transaksi ORDER BY id DESC LIMIT 1";

	$result = mysqli_query($db, $query);

	$fetch = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Janji Temu Anda Berhasil di Buat</title>
	</head>
	<body>
		<div class="notif">
			<h1>Selamat Janji Temu Anda Telah di Buat</h1>
			<p>Janji Temu Dengan Nomor Antrian:</p>
			<p><?= $fetch['order_id'];?></p>
		</div>
	</body>
</html>
