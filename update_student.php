<?php
$conn = mysqli_connect("localhost", "root", "", "student_db");
$id = $_POST['id'];
$name = $_POST['full_name'];
$email = $_POST['email'];

$sql = "UPDATE students SET full_name='$name', email='$email' WHERE student_id='$id'";
mysqli_query($conn, $sql);
header("Location: view_students.php"); // ሲያልቅ ወደ ዝርዝሩ ይመልስሻል
?>