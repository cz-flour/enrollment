<?php
include_once "connection.php";

// Assuming that you have obtained the email and password from the user input
$email = $_POST['email'];
$pwd = $_POST['pwd'];

// Validate email and password presence
if (empty($email) || empty($pwd)) {
    echo "Email and password are required.";
    exit; // Terminate the script
}

// Prepare and execute the SQL query
$sql = "SELECT * FROM user WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();

$result = $stmt->get_result();

if ($result && $result->num_rows === 1) {
    $row = $result->fetch_assoc();
    $storedPassword = $row["pwd"]; // Assuming the column name is "pwd"
    $is_admin = $row["is_admin"]; // Assuming the column name is "is_admin"

    // Check if the provided password matches the stored password
    if ($pwd === $storedPassword) {
        $stmt->close();
        $conn->close();

        // Start or resume the session before any output
        session_start();
        $_SESSION['user_id'] = $row['user_id']; // Store user's ID in the session
        
        if ($is_admin == 1) {
            header("location: admin/index.php"); // Redirect admin to index.php (admin page)
        } else {
            header("location: home2.php"); // Redirect other users to home2.php (user page)
        }
        exit; // Terminate the script after header redirection
    } else {
        // Invalid password
        echo "Invalid password.";
    }
} else {
    // Invalid email
    echo "Invalid email.";
}

// Close statement and connection
$stmt->close();
$conn->close();
?>
