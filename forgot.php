<?php

require_once 'connection.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];

    // Check if email exists in the database
    $sql = "SELECT * FROM users WHERE email ";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        // Generate a random token and store it in the database
        $token = bin2hex(random_bytes(32));
        $sql = "UPDATE users SET reset_token = '$token' WHERE email ";
        $con->query($sql);

        // Send a reset password email with the token
        $resetLink = "http://yourwebsite.com/reset_password.php?token=$token";
        $subject = "Password Reset";
        $message = "Click the following link to reset your password: $resetLink";
        $headers = "From: your_email@example.com";

        mail($email, $subject, $message, $headers);

        echo "Password reset link has been sent to your email.";
    } else {
        echo "Email not found in our database.";
    }
}

$con->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Forgot Password</title>
</head>
<body>
    <h2>Forgot Password</h2>
    <form method="post" action="">
        <label>Email:</label>
        <input type="email" name="email" required>
        <br>
        <input type="submit" value="Reset Password">
    </form>
</body>
</html>
