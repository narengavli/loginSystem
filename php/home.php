<?php
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: ../index.html');
	exit;
}
?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- title -->
  <title>Home Page</title>
  <link rel="icon" type="image/x-icon" href="../img/home/circle-user.svg" />

  <!-- link css file -->
  <link rel="stylesheet" href="../css/navbar.css">
  <link rel="stylesheet" href="../css/home.css">

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
        <a href="profile.php">
          <i class="fas fa-user-circle"></i> Profile </a>
      </button>

      <button type="button" class="nav-btn">
        <a href="logout.php">
          <i class="fas fa-sign-out-alt"></i> Logout </a>
      </button>
    </div>
  </nav>

  <!-- content -->
  <div class="content">
    <p id="user-name">Welcome back,
      <?=$_SESSION['name']?>!
    </p>
  </div>

</body>

</html>