<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("0");
}

$sql = "SELECT COUNT(*) as total FROM students";
$result = $conn->query($sql);

if ($result) {
    $row = $result->fetch_assoc();
    echo $row['total'];
} else {
    echo "0";
}

$conn->close();
?>