<?php
session_start();
include ('reusables/connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $password = md5(mysqli_real_escape_string($connect, $_POST['password']));

    $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($connect, $query);

    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);

        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_email'] = $user['email'];

        header("Location: admin.php");
        exit();
    } else {
        header("Location: login.php?error=Invalid credentials. Please try again.");
        exit();
    }
} else {
    header("Location: login.php");
    exit();
}
