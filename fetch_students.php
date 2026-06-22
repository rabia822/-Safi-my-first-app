<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

// ሁሉንም ተማሪዎች ከዳታቤዝ መውሰድ
$sql = "SELECT * FROM students";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Department</th>
                <th>Address</th>
            </tr>";
    
    // እያንዳንዱን ተማሪ በሰንጠረዥ ውስጥ ማተም
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["student_id"] . "</td>
                <td>" . $row["full_name"] . "</td>
                <td>" . $row["email"] . "</td>
                <td>" . $row["department"] . "</td>
                <td>" . $row["address"] . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "<p style='padding: 10px; color: #777;'>No students registered yet.</p>";
}

$conn->close();
?>