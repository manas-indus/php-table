<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);  // Encrypt the password

    $sql = "INSERT INTO user (name, email, phone_number, password) VALUES ('$name', '$email', '$phone_number', '$password')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Signup successful!'); window.location.href = 'login.php';</script>";
        exit();  // Ensure the rest of the script does not execute
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .signup-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        .signup-container h2 {
            margin-bottom: 20px;
        }

        .signup-container form {
            display: flex;
            flex-direction: column;
        }

        .signup-container label {
            text-align: left;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .signup-container input {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }

        .signup-container button {
            padding: 10px;
            background-color: #007BFF;
            border: none;
            border-radius: 4px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }

        .signup-container button:hover {
            background-color: #0056b3;
        }

        .signup-container p {
            margin-top: 20px;
        }

        .signup-container a {
            color: #007BFF;
            text-decoration: none;
        }

        .signup-container a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="signup-container">
    <h2>Sign Up</h2>
    <form method="POST" action="">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="phone_number">Phone:</label>
        <input type="text" id="phone_number" name="phone_number" required>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        
        <button type="submit">Sign Up</button>
    </form>

    <p>Already have an account? <a href="index.php">Log in here</a></p>
</div>

</body>
</html>
