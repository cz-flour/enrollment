<?php
include_once "connection.php";

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Validate email and password
$sql = "SELECT * FROM user WHERE email = '$email'";
$result = $conn->query($sql);

if ($result && $result->num_rows === 1) {
    $row = $result->fetch_assoc();
    $hashedPassword = $row["pwd"];

    // Check if the provided password matches the stored hashed password
    if (password_verify($password, $hashedPassword)) {
        // Successful login
        echo "Login successful!";
    } else {
        // Invalid password
        echo "Invalid password.";
    }
} else {
    // Invalid email
    echo "Invalid email.";
}

// Close connection
$conn->close();

?>