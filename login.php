<?php
include 'components/connection.php';
session_start();

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
} else {
    $user_id = '';
}

if (isset($_POST['submit'])) {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $pass = filter_var($_POST['pass'], FILTER_SANITIZE_STRING);

    // Prepare statement to get user data based on email
    $select_user = $conn->prepare("SELECT * FROM `users` WHERE email = ?");
    $select_user->execute([$email]);
    $row = $select_user->fetch(PDO::FETCH_ASSOC);

    if ($row && password_verify($pass, $row['password'])) {
        // Set session variables if login is successful
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['user_name'] = $row['name'];
        $_SESSION['user_email'] = $row['email'];
        
        header('Location: home.php');
        exit();
    } else {
        $message = 'Incorrect username or password';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Green Tea Cafe - Login Now</title>
    <style type="text/css">
        <?php include 'style.css'; ?>	
    </style>
</head>
<body>
    <div class="form-container">
        <div class="title">
            <img src="img/download.png" alt="Green Tea Cafe Logo">
            <h1>Login Now</h1>
            <p>****************************************</p>
        </div>
        <form action="" method="post">	
            <div class="input-field">
                <p>Your Email</p>
                <input type="email" name="email" required placeholder="Enter your email" maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')">
            </div>
            <div class="input-field">
                <p>Your Password</p>
                <input type="password" name="pass" required placeholder="Enter your password" maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')">
            </div>
            <input type="submit" name="submit" value="Login Now" class="btn">
            <?php
            // Display error message if credentials are incorrect
            if (!empty($message)) {
                echo '<p style="color: red;">' . $message . '</p>';
            }
            ?>
            <p>Do not have an account? <a href="register.php">Register now</a></p>
        </form>
    </div>
    <script src="components/sweetalert.js"></script>
    <script src="script.js"></script>
    <?php include 'components/alert.php'; ?>
</body>
</html>
