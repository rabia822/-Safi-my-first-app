<?php
$conn = mysqli_connect("localhost", "root", "", "student_db");
$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Registered Students</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; background-color: #f4f7f6; padding: 20px; }
        h2 { text-align: center; color: #043f57; }
        table { width: 95%; margin: 20px auto; border-collapse: collapse; background: white; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        th { background-color: #043f57; color: white; padding: 15px; text-align: left; }
        td { padding: 12px; border-bottom: 1px solid #ddd; }
        tr:hover { background-color: #f1f1f1; }
        .edit-btn { color: #fff; background-color: #f39c12; padding: 5px 10px; text-decoration: none; border-radius: 4px; font-size: 13px; }
        .back-link { display: block; text-align: center; margin-top: 20px; color: #043f57; text-decoration: none; font-weight: bold; }
    </style>
</head>
<body>

    <h2>Registered Students List</h2>

    <table>
        <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Department</th>
            <th>Address</th>
            <th>Action</th>
        </tr>
        <?php
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td>".$row['student_id']."</td>
                        <td>".$row['full_name']."</td>
                        <td>".$row['email']."</td>
                        <td>".$row['department']."</td>
                        <td>".$row['address']."</td>
                        <td><a href='edit_student.php?id=".$row['student_id']."' class='edit-btn'>Edit</a></td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='6'>No students found!</td></tr>";
        }
        ?>
    </table>

    <a href="index.html" class="back-link">← Back to home</a>

</body>
</html>