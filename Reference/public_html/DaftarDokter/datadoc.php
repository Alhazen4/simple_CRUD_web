<!DOCTYPE html>
<html>
<head>
<style>
    table {
        width: 50%;
    }

    table, td, th {
        border: 1px solid black;
        padding: 5px;
    }

    th {text-align: left;}
</style>
</head>

<body>
<?php
include("../php/conn.php");

// get the dctr parameter from URL
$doc_list = $_REQUEST['doctor'];

if ($doc_list == "fajar") {
  	$sql = "SELECT * FROM doctor WHERE id = 3 ";
  	$result = mysqli_query($db, $sql);
  
  if (mysqli_num_rows($result) > 0) {
  	while($row = mysqli_fetch_assoc($result)) {
   	echo "<table>
    <tr>
    <th>Nama Depan</th>
    <th>Nama Belakang</th>
    <th>No. Phone</th>
    <th>Spesialis</th>
    <th>Hari Praktek</th>
    <th>Jam Praktek</th>
    <tr>";

    echo "<tr>";
    echo "<td>" . $row['fname'] . "</td>";
    echo "<td>" . $row['lname'] . "</td>";
    echo "<td>" . $row['pnum'] . "</td>";
    echo "<td>" . $row['dept'] . "</td>";
    echo "<td>" . $row['hari'] . "</td>";
    echo "<td>" . $row['jam'] . "</td>";

    echo "</th>";
    echo "</table>";
  	}
	} else {
  		echo "0 results";
	}
	$conn->close();
}

elseif ($doc_list == "ardi") {
 $sql = "SELECT * FROM doctor WHERE id = 1 ";
  	$result = mysqli_query($db, $sql);
  
  if (mysqli_num_rows($result) > 0) {
  	while($row = mysqli_fetch_assoc($result)) {
   	echo "<table>
    <tr>
    <th>Nama Depan</th>
    <th>Nama Belakang</th>
    <th>No. Phone</th>
    <th>Spesialis</th>
    <th>Hari Praktek</th>
    <th>Jam Praktek</th>
    <tr>";

    echo "<tr>";
    echo "<td>" . $row['fname'] . "</td>";
    echo "<td>" . $row['lname'] . "</td>";
    echo "<td>" . $row['pnum'] . "</td>";
    echo "<td>" . $row['dept'] . "</td>";
    echo "<td>" . $row['hari'] . "</td>";
    echo "<td>" . $row['jam'] . "</td>";

    echo "</th>";
    echo "</table>";
  	}
	} else {
  		echo "0 results";
	}
	$conn->close();
}

elseif ($doc_list == "rayhand") {
 $sql = "SELECT * FROM doctor WHERE id = 2 ";
  	$result = mysqli_query($db, $sql);
  
  if (mysqli_num_rows($result) > 0) {
  	while($row = mysqli_fetch_assoc($result)) {
   	echo "<table>
    <tr>
    <th>Nama Depan</th>
    <th>Nama Belakang</th>
    <th>No. Phone</th>
    <th>Spesialis</th>
    <th>Hari Praktek</th>
    <th>Jam Praktek</th>
    <tr>";

    echo "<tr>";
    echo "<td>" . $row['fname'] . "</td>";
    echo "<td>" . $row['lname'] . "</td>";
    echo "<td>" . $row['pnum'] . "</td>";
    echo "<td>" . $row['dept'] . "</td>";
    echo "<td>" . $row['hari'] . "</td>";
    echo "<td>" . $row['jam'] . "</td>";

    echo "</th>";
    echo "</table>";
  	}
	} else {
  		echo "0 results";
	}
	$conn->close();
}
?>
</body>
</html>