<!-- login.php -->
<?php
session_start(); // Start a PHP session

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate the credentials (you may use a database or any other authentication mechanism here)
    if ($username === 'admin' && $password === 'password') {
        // Successful login, store the username in the session
        $_SESSION['username'] = $username;

        // Redirect the user to a protected page
        header("Location: welcome.php");
        exit();
    } else {
        // Invalid credentials, display an error message
        $error = "Invalid username or password.";
    }
}
?>
