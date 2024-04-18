<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DoTrack</title>
    <link rel="icon" href="../IMAGE/logo.png">
    <link rel="stylesheet" href="../CSS/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="wrapper-main">
        <div class="wrapper">
            <form method="POST" class="form" action="login.php">
                <div class="logoimg">
                    <img src="../IMAGE/whitelogo.png" alt="DoTrack Logo">
                </div>
                <h1>Login</h1>
                <div class="input-box">
                    <input type="text" placeholder="Username" name="Username" required> <i class='bx bxs-user'></i>
                </div>
                <div class="input-box">
                    <input type="password" placeholder="Password" name="Password" required> <i class='bx bxs-lock-alt'></i>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">Remember me</label>
                    <a href="#">Forgot password?</a>
                </div>
                <button type="submit" class="button">Login</button>
                <div class="register-link">
                    <p>Don't have an account? <a href="../HTML/SignupModal.php">Sign up</a></p>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
