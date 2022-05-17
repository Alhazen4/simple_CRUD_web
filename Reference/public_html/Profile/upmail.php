<?php
    session_start();

	if (!isset($_SESSION['id'])) {
		header('Location: signin.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Email</title>
</head>
<style>
    body{
        margin: 0;
    }
    form{
        margin: 10% 42%;
    }
    ul{
        list-style: none;
    }
    li{
        margin-bottom: 10px;
    }
    h1{
        padding: 15%;
        text-align: center;
    }
    button{
        width: 83%;
    }
    .back {
        margin: 0% 48%;
    }
</style>
<body>
    <form action="update.php" method="post">
        <h1>Update Your Email</h1>
        <ul>
            <li><label for="curmail">Enter an Old Email: </label></li>
            <li><input type="email" name="curmail" id="curmail" placeholder="Enter old email"></li>
            <li><label for="umail">Enter an New Email: </label></li>
            <li><input type="email" name="umail" id="umail" placeholder="Enter new email"></li>
            <li><button type="submit" name="button">Edit</button></li>
        </ul>
    </form>
    <div class="back">
        <a href="user_profile.php">Back</a>
    </div>

</body>
</html>