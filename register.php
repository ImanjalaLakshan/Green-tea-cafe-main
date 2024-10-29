<?php
include 'components/connection.php';
session_start();

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
} else {
    $user_id = '';
}

if (isset($_POST['submit'])) {
    $id = unique_id();  
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $pass = filter_var($_POST['pass'], FILTER_SANITIZE_STRING);
    $cpass = filter_var($_POST['cpass'], FILTER_SANITIZE_STRING);

    $select_user = $conn->prepare("SELECT * FROM `users` WHERE email = ?");
    $select_user->execute([$email]);
    $row = $select_user->fetch(PDO::FETCH_ASSOC);

    if ($select_user->rowCount() > 0) {
        $message[] = 'Email already exists.';
        echo 'Email already exists';
    } else {
        if ($pass != $cpass) {
            $message[] = 'Passwords do not match. Please confirm your password.';
            echo 'confirm your password';
        } else {
            $hashed_pass = password_hash($pass, PASSWORD_DEFAULT);

            $insert_user = $conn->prepare("INSERT INTO `users`(id, name, email, password) VALUES(?, ?, ?, ?)");
            $insert_user->execute([$id, $name, $email, $hashed_pass]);

            $select_user = $conn->prepare("SELECT * FROM `users` WHERE email = ?");
            $select_user->execute([$email]);
            $row = $select_user->fetch(PDO::FETCH_ASSOC);

            if ($select_user->rowCount() > 0) {
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['user_name'] = $row['name'];
                $_SESSION['user_email'] = $row['email'];
            }
        }
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Green Tea Cafe - Register Now</title>
    <style type="text/css">
        <?php include 'style.css'; ?>	
    </style>
</head>
<body>
    <div class="main-container">
        <section class="form-container">
            <div class="title">
                <img src="img/download.png" alt="Green Tea Cafe Logo">
                <h1>Register Now</h1>
                <p>****************************************</p>
            </div>
            <form action="" method="post">
                <div class="input-field">
                    <p>Your Name</p>
                    <input type="text" name="name" required placeholder="Enter your name" maxlength="50">
                </div>
                <div class="input-field">
                    <p>Your Email</p>
                    <input type="email" name="email" required placeholder="Enter your email" maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')">
                </div>
                <div class="input-field">
                    <p>Your Password</p>
                    <input type="password" name="pass" required placeholder="Enter your password" maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')">
                </div>
                <div class="input-field">
                    <p>Confirm Password</p>
                    <input type="password" name="cpass" required placeholder="Confirm your password" maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')">
                </div>
                <input type="submit" name="submit" value="Register Now" class="btn">

                <p>Already have an account? <a href="login.php">Login now</a></p>
            </form>
        </section>
    </div>
    <script src="components/sweetalert.js"></script>
    <script src="script.js"></script>
    <?php include 'components/alert.php'; ?>
</body>
</html>
