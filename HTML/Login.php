<?php
// Path: HTML/login.php

// Start session
session_start();

// Include database connection
include_once('connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];

    // Validate username and password
    if (empty($Username) || empty($Password)) {
        echo "<script>alert('Username and Password are required');</script>";
        exit();
    } else {
        // Prepare and execute statement to fetch user from database
        $stmt = $conn->prepare("SELECT * FROM user WHERE username = ?");
        $stmt->bind_param("s", $Username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            // Fetch user details
            $row = $result->fetch_assoc();
            // Verify password
            if ($Password === $row['password']) {
                // Start a new session and regenerate ID
                session_regenerate_id();
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $Username;
                header("Location: ../HTML/home.php");
                exit();
            } else {
                // Invalid password
                echo "<script>alert('Invalid Password');</script>";
                header("Location: ../HTML/index.php?error=Invalid Password");
                exit();
            }
        } else {
            // Redirect to signup page
            header("Location: ../HTML/SignupModal.php?error=User doesn't exist. Please register first.");
            exit();
        }
    }
} else {
    // Redirect to index.php if accessed directly
    header("Location: ../HTML/index.php");
    exit();
}

// Close database connection
$stmt->close();
$conn->close();
?>
