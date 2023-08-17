<?php

session_start();
include_once "connection.php";


//checks if value of name="email_add" is set
if(isset($_POST['email'])) {

    //transfers value of name="" from form to variable
    //$r_username = $_POST['reg_username'];
    $email = $_POST['email'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $pwd = $_POST['pwd'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];

    //hashes value of name="password" from form then transfered to variable
    //$r_pwdhash = password_hash($_POST['password'], PASSWORD_ARGON2ID);

    $_SESSION["email"] = $email;
    $_SESSION["pwd"] = $_POST['pwd'];
    
    //preparing arguments for insert()
    // check if the user already exists
    $sql = "SELECT * FROM student_info WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // the user already exists, so do not insert a new record
        $msg="User already exists.";
    } else {
        // insert the new user record into the users table
        $sql = "INSERT INTO student_info (fname, mname,  lname, contact, email, pwd) VALUES ('$fname', '$mname' , '$lname', '$contact', '$email', '$pwd')";
        if (mysqli_query($conn, $sql)) {
            $msg="New user record inserted successfully.";
        } else {
            $msg="Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
    mysqli_close($conn);
    $msg = "Registration succesful! Please log in.";
    header("location: home.php?msg=".urlencode($msg));
    exit;
}


?>