<?php

session_start();
include_once "connection.php";

    $lrn = $_POST['lrn'];
    $lname = $_POST['lname'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $extension = $_POST['extension'];
    $birthdate = $_POST['birthdate'];
    $age = $_POST['age'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $cstatus = $_POST['cstatus'];
    $nationality = $_POST['nationality'];
    $place_birth = $_POST['place_birth'];
    $sex = $_POST['sex'];
    $religion = $_POST['religion'];
    $contact = $_POST['contact'];
    $province = $_POST['province'];
    $municipality = $_POST['municipality'];
    $brgy = $_POST['brgy'];
    $purok = $_POST['purok'];
    $grlevel = $_POST['grlevel'];
    $track = $_POST['track'];
    $strand = $_POST['strand'];
    $user_id = $_SESSION['user_id'];

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


       // $sql = "INSERT INTO student_info (lrn, lname, fname,mname, extension, birthdate, age, height, weight, cstatus, nationality, place_birth, sex, religion, contact, province, municipality, brgy, purok, grlevel, track, strand, user_id) VALUES ('$user_id','$lrn', '$lname', '$fname', '$mname', '$extension', '$birthdate', '$age', '$height', '$weight', '$cstatus', '$nationality', '$place_birth', '$sex', '$religion', '$contact', '$province', '$municipality', '$brgy', '$purok', '$grlevel', '$track', '$strand', '$user_id')";
        
    
       /* if ($conn->query($sql) === TRUE) {
            $msg = "Student information added successfully!";
        } else {
            $msg = "Error: " . $sql . "<br>" . $conn->error;
        }*/

        // ... (other code)

$sql = "INSERT INTO student_info (lrn, lname, fname, mname, extension, birthdate, age, height, weight, cstatus, nationality, place_birth, sex, religion, contact, province, municipality, brgy, purok, grlevel,'track','strand', user_id) VALUES ('$lrn', '$lname', '$fname', '$mname', '$extension', '$birthdate', '$age', '$height', '$weight', $cstatus, '$nationality', '$place_birth', '$sex', '$religion', '$contact', '$province', '$municipality', '$brgy', '$purok', '$grlevel', '$track', '$strand', '$user_id')";

$stmt = $conn->prepare($sql);
$stmt->bind_param("issssssiisssssisssssssi", $lrn, $lname, $fname, $mname, $extension, $birthdate, $age, $height, $weight, $cstatus, $nationality, $place_birth, $sex, $religion, $contact, $province, $municipality, $brgy, $purok, $grlevel, $track, $strand,  $user_id);

if ($stmt->execute()) {
    $msg = "Student information added successfully!";
} else {
    $msg = "Error: " . $stmt->error;
}

echo "SQL Query: $sql";
$stmt->close();

// ... (other code)

        
        $conn->close();
    
    header("location:home.php?register&msg=$msg");
    exit;



?>