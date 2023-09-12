<?php
include_once "connection.php";

$email = $_POST['email'];
$pwd = $_POST['pwd'];

if (empty($email) || empty($pwd)) {
    echo "Email and password are required.";
} else {
    $sql = "SELECT * FROM user WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && $result->num_rows === 1) {
        $row = $result->fetch_assoc();
        $storedPassword = $row["pwd"]; // Assuming the column name is "pwd"

        if (password_verify($pwd, $storedPassword)) { // Use password_verify to check the password
            session_start();
            $_SESSION['user_id'] = $row['user_id'];
            $is_admin = $row["is_admin"]; // Assuming the column name is "is_admin"

            if ($is_admin == 1) {
                header("location: admin/index.php");
            } else {
                header("location: home2.php");
            }
            exit;
        } else {
            // Invalid password
            echo "Invalid password";
        }
    } else {
        // Invalid email
        echo "Invalid email.";
    }

    $stmt->close();
    $conn->close();
}

?>
