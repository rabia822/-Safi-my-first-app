<?php
// ዳታቤዝ ለማገናኘት
$conn = mysqli_connect("localhost", "root", "", "student_db");
// የሪፖርት መረጃዎችን ማምጣት
$sql = "SELECT department, COUNT(*) as total_students FROM students GROUP BY department";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Student Reports</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; padding: 20px; background-color: #f4f7f6; }
        table { width: 60%; margin: 20px auto; border-collapse: collapse; background: white; }
        th, td { padding: 15px; border: 1px solid #ddd; text-align: center; }
        th { background-color: #043f57; color: white; }
        .back-link { display: block; text-align: center; margin-top: 20px; font-weight: bold; }
    </style>
</head>
<body>

    <h2 style="text-align:center;">Departmental Student Report</h2>

    <table>
        <tr>
            <th>Department</th>
            <th>Number of Students</th>
        </tr>
        <?php
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td>".$row['department']."</td>
                        <td>".$row['total_students']."</td>
                      </tr>";
            }
        }
        ?>
    </table>

    <a href="index.php" class="back-link">← Back to Home</a>

</body>
</html>