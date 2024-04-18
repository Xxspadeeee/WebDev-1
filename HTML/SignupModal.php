<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>DoTrack</title>
    <link rel="icon" href="/IMAGE/logo.png">
</head>

<body>
    <div class="wrapper-main-1">
        <div class="Signup">
            <form class="sign-up" action="connect.php" method="post">
                <h1>Sign up to track the documents</h1>
                <div class="input-box">
                    <label for ="Email"> Email </label>
                    <input type="text" class="form-control" id="Email" name="Email" required>
                </div>
                <div class="input-box">
                    <label for ="firstName"> First Name </label>
                    <input type="text" class="form-control" id="firstName" name="firstName" required>
                </div>
                <div class="input-box">
                    <label for="lastName"> Last Name </label>
                    <input type="text" class="form-control" id="lastName" name="lastName" required>
                </div>
                <div class="input-box">
                    <label for="Username"> Username </label>
                    <input type="text" class="form-control" id="Username" name="Username" required>
                </div>
                <div class="input-box">
                    <label for="Password"> Password </label>
                    <input type="password" class="form-control" id="Password" name="Password" required>
                </div>
                <div class="learnmore">
                    <p>People who use our service may have uploaded your contact information to Instagram. <a
                            href="">Learn
                            More</a></p>
                </div>
                <span class="terms">
                    <p>By signing up, you agree to our Terms, Privacy Policy and Cookies Policy.</p>
                </span>

                <button type="submit" class="signupbutton">Sign up</button>
                <div class="register-link">
                    <p> Already have an account? <a href="../HTML/index.php">Log in</a></p>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
