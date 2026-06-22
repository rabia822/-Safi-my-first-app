<?php
$conn = mysqli_connect("localhost", "root", "", "student_db");
$id = $_GET['id']; // ከሊንኩ የመጣውን ID ይይዛል

// መረጃውን ለማምጣት
$sql = "SELECT * FROM students WHERE student_id = '$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<form action="update_student.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $row['student_id']; ?>">
    Name: <input type="text" name="full_name" value="<?php echo $row['full_name']; ?>"><br>
    Email: <input type="text" name="email" value="<?php echo $row['email']; ?>"><br>
    <input type="submit" value="Update Student">
</form>