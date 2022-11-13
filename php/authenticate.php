<?php
session_start();
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

if (!isset($_POST["uname"], $_POST["psw"])) {
    exit("Please fill both the username and password fields!");
}

if (
    $stmt = $con->prepare(
        "SELECT id, password FROM accounts WHERE username = ?"
    )
) {
    $stmt->bind_param("s", $_POST["uname"]);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $password);
        $stmt->fetch();
        if ($_POST["psw"] === $password) {
            session_regenerate_id();
            $_SESSION["loggedin"] = true;
            $_SESSION["name"] = $_POST["uname"];
            $_SESSION["id"] = $id;
            header('Location: home.php');
        } else {
            // Incorrect password
            header('Location: ../index.html');
        }
    } else {
        // Incorrect username
        header('Location: ../index.html');
    }

    $stmt->close();
}
?>
