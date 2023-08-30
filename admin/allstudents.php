<!DOCTYPE html>
<html>

<head>
    <title>Users</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <!-- Link to Bootstrap CSS -->
<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
</head>
<style>
table, td {
border-collapse: collapse;
color: #808080;
font-family: monospace;
font-size: 15px;
text-align: center;
border: 1px solid #ddd;
padding: 10px 15px;
}
th {
background-color:#2F539B;
color: white;
border: 1px solid #ddd;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>

<body class="bg-warning text-light">
    <div class="container-fluid bg-transparent text-light">   
        <div class="row">
            <div class="col-7 mx-auto my-3">
                <h3 class="display">
                    Students
                </h3>
    <div class="container">
        <div class="row">
            

            <div class="col-12 p-3 mb-2 bg-transparent" style="color: light;">
               <h3>Records</h3>
               <table>
                    <tr>
                    <th>LRN</th>
                    <th>Last Name</th>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Extension</th>
                    <th>Birthday</th>
                    <th>Age</th>
                    <th>Height</th>
                    <th>Weight</th>
                    <th>Civil Status</th>
                    <th>Nationality</th>
                    <th>Place of Birth</th>
                    <th>Sex</th>
                    <th>Religion</th>
                    <th>Contact Number</th>
                    <th>Address</th>
                    <th>Grade Level</th>
                    <th>Track</th>
                    <th>Strand</th>
                    <th>Status</th>

                    </tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "enrollment");
// Check connection



if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM student_info";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
    $address = "Purok" .$row["purok"] . ", " . $row["brgy"] . ", " . $row["municipality"].",".$row["province"];
echo "<tr><td>" . $row["lrn"]. "</td><td>" . $row["lname"] . "</td><td>" . $row["fname"]. "</td><td>" . $row["mname"]. "</td><td>" . $row["extension"]. "</td><td>" . $row["birthdate"]. "</td><td>" . $row["age"]. "</td><td>" . $row["height"]. "</td><td>" . $row["weight"]. "</td><td>" . $row["cstatus"]. "</td><td>" . $row["nationality"]. "</td><td>" . $row["place_birth"]. "</td><td>" . $row["sex"]. "</td><td>" .$row["religion"]. "</td><td>" .$row["contact"]. "</td><td>" .$address. "</td><td>" .$row["grlevel"]. "</td><td>" .$row["track"]. "</td><td>" .$row["strand"]. "</td><td>" .$row["psa"]. "</td><td>";	
}
echo "</table>";
}
else { echo "0 results"; }
$conn->close();

?>
</table>
            </div>
            <div class="col-1"></div>
        </div>
    </div>

    <!-- Link to jQuery -->
<!--    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>-->
    <!-- Link to Bootstrap JS -->
<!--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->

</body>

</html>