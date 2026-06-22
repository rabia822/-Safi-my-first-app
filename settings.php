<!DOCTYPE html>
<html>
<head>
    <title>System Settings</title>
    <style>
        .main-container { 
            width: 400px; 
            margin: 50px auto; 
            padding: 20px; 
            border: 1px solid #ccc; 
            border-radius: 10px; 
            text-align: center; 
            font-family: sans-serif; 
        }
        button { 
            width: 100%; 
            padding: 10px; 
            margin: 5px 0; 
            cursor: pointer; 
            background-color: #043f57; 
            color: white; 
            border: none; 
            border-radius: 5px; 
        }
        button:hover { background-color: #065b7d; }
        .back-link { display: inline-block; margin-top: 15px; text-decoration: none; color: #043f57; font-weight: bold; }
    </style>
</head>
<body>

<div class="main-container">
    <h1>System Settings</h1>
    
    <button onclick="window.location.href='profile.php'">Profile Settings</button>
    <button onclick="window.location.href='change_password.php'">Change Password</button>
    <button onclick="window.location.href='language.php'">Language Settings</button>
    
    <br><br>
    <a href="http://localhost/Student_sys/index.html">Back to Home</a>
</div>

</body>
</html>