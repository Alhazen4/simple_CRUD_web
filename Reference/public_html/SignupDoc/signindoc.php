<?php
	session_start();

	//if (isset($_SESSION['id'])) {
        //header('Location: homepage.php');
        //exit;
    //}

    include("../php/conn.php");

    if($_SERVER["REQUEST_METHOD"] == "POST") {
      
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $password = mysqli_real_escape_string($db, $_POST['pass']); 
      
        $sql = "SELECT id FROM doctor WHERE email = '$email' and password = '$password'";
        $result = mysqli_query($db, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_affected_rows($db);
		
        if(empty($_POST['email']) && empty($_POST['password'])){
            echo "<script>
                    alert('Jangan Kosong!');
                </script>";
        }
            
        else {
            if ($count > 0) {
              	$_SESSION['id'] = $row['id'];
                header('Location: ../HomeDoctor/indexDoctor.php');
            }else {
                echo "<script>
                        alert('Email or Password didn't exist');                
                    </script>";
            }
        }
          
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../src/form.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
</head>
<body>
		<main>
			<div class="img">
				<img src="../assets/images/hospital.jpeg" alt="" srcset="" />
			</div>
			<form action="" method="post">
				<div class="form">
					<!-- ini gambar logo -->
					<div class="logo">
						<img src="../assets/images/logorehat.png" alt="Logo ReHat" />
					</div>

					<h1>Sign In as Doctor</h1>
					<ul>
						<li><label for="email">Email: </label></li>
						<li><input type="email" name="email" id="email" placeholder="Email" autocomplete="off"/></li>
						<li><label for="pass">Password: </label></li>
						<li><input type="password" name="pass" id="pass" placeholder="Password" /></li>
						<li><button type="submit" name="submit_btn">Sign In</button></li>
					</ul>
                    <p>Didn't have an account yet? Sign Up<a href="../SignupDoc/signupdoc.html"> here</a></p>
                    <p>or are you the patient, Login<a href="../Signup/signin.php"> here</a></p>
				</div>
			</form>
		</main>
	</body>
</html>