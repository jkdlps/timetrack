<?php
// session_start();
include "functions.php";
db();

if (isset($_POST['submit'])) {
    $email = $_POST['email'];

    $password = password_verify($_POST['password'], PASSWORD_DEFAULT);

    $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($con, $query);
    if (mysqli_num_rows($result) > 0) {
        $_SESSION['email'] = $email;
        header('Location: employee_dashboard.php');
        exit();
    } else {
        echo 'Invalid email or password';
        header("location: ../loginpage.php");
        exit();
    }

    mysqli_close($con);
}
?>