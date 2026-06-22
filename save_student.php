<?php
$conn = mysqli_connect("localhost", "root", "", "student_db");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$dept = $_POST['department'];
$addr = $_POST['address'];

$sql = "INSERT INTO students (student_id, full_name, email, department, address) 
        VALUES ('$id', '$name', '$email', '$dept', '$addr')";

if (mysqli_query($conn, $sql)) {
    // እዚህ ጋር ነው ለውጡን ያደረግኩት
    echo "<h2>Student registered successfully!</h2>";
    echo "<a href='register.php'>Back to Registration</a>";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>