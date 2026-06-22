<?php
session_start();

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == 'admin' && $password == '1234') {
        $_SESSION['user'] = $username;
        header("Location: index.php");
        exit();
    } else {
        $error = "የተሳሳተ ስም ወይም የይለፍ ቃል!";
    }
}
?>
<!DOCTYPE html>
<html>
<body>
    <form method="POST" action="login.php">
        <h2>Login</h2>
        <?php if(isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
        <input type="text" name="username" placeholder="Username" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <button type="submit" name="login">Login</button>
    </form>
</body>
</html>