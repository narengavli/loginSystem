<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION["loggedin"])) {
    header("Location: index.html");
    exit();
}
$DATABASE_HOST = "localhost";
$DATABASE_USER = "root";
$DATABASE_PASS = "";
$DATABASE_NAME = "loginsystem";
$con = mysqli_connect(
    $DATABASE_HOST,
    $DATABASE_USER,
    $DATABASE_PASS,
    $DATABASE_NAME
);
if (mysqli_connect_errno()) {
    exit("Failed to connect to MySQL: " . mysqli_connect_error());
}
$stmt = $con->prepare("SELECT password, email FROM accounts WHERE id = ?");
// In this case we can use the account ID to get the account info.
$stmt->bind_param("i", $_SESSION["id"]);
$stmt->execute();
$stmt->bind_result($password, $email);
$stmt->fetch();
$stmt->close();
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<!-- title -->
	<title>Profile</title>
	<link rel="icon" type="image/x-icon" href="../img/home/circle-user.svg" />

	<!-- link css file -->
	<link rel="stylesheet" href="../css/navbar.css">
	<link rel="stylesheet" href="../css/profile.css">

	<!-- link fontawesome -->
	<script src="https://kit.fontawesome.com/91b7a0e05b.js" crossorigin="anonymous"></script>
</head>

<body class="loggedin">
	<!-- navbar -->
	<nav>
		<div class="logo">
			<img src="../img/home/logo.gif" id="nav-logo">
		</div>
		<div>
			<button type="button" class="nav-btn">
				<a href="home.php">
					<i class="fa-solid fa-house-user"></i> Home </a>
			</button>

			<button type="button" class="nav-btn">
				<a href="logout.php">
					<i class="fas fa-sign-out-alt"></i> Logout </a>
			</button>
		</div>
	</nav>

	<!-- profile content -->
	<div class="content">
		<h2 id="page-title">Profile</h2>
		<div id="profile">
			<div id="profile-photo">
				<div id="photo-border">
					<img src="../img/profile/user-01.png" id="photo">
				</div>
			</div>
			<div id="profile-info">
				<div>
					<b>Username:</b>
					<?=$_SESSION['name']?>
				</div>
				<div>
					<b>Password:</b>
					<?=$password?>
				</div>
				<div>
					<b>Email:</b>
					<?=$email?>
				</div>
			</div>
		</div>
	</div>
</body>

</html>