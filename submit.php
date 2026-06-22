<?php
$servername = "localhost";
$username = "root";       // XAMPP default username
$password = "";           // XAMPP default password (empty)
$dbname = "student_db";   // Database name

// 1. Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// 2. Check connection
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

// 3. Check if data is sent via POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Security check to prevent SQL Injection
    $student_id = $conn->real_escape_string($_POST['student_id']);
    $full_name = $conn->real_escape_string($_POST['full_name']);
    $email = $conn->real_escape_string($_POST['email']);
    $department = $conn->real_escape_string($_POST['department']);
    $address = $conn->real_escape_string($_POST['address']);

    // 4. SQL Query to insert data into students table
    $sql = "INSERT INTO students (student_id, full_name, email, department, address) 
            VALUES ('$student_id', '$full_name', '$email', '$department', '$address')";

    if ($conn->query($sql) === TRUE) {
        echo "Student registered successfully!";
    } else {
        // Check if the Student ID already exists (Duplicate Key Error)
        if ($conn->errno == 1062) {
            echo "Error: This Student ID is already registered!";
        } else {
            echo "Error occurred: " . $conn->error;
        }
    }
}

// 5. Close database connection
$conn->close();
?>