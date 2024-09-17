<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);  // Encrypt the password

    $sql = "INSERT INTO user (name, email, phone_number, password) VALUES ('$name', '$email', '$phone_number', '$password')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('User added successfully!'); window.location.href = 'dashboard.php';</script>";
        exit();  // Ensure the rest of the script does not execute
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>

<?php include 'header.php'; ?>

<div class="sidebar">
    <h2>Admin Panel</h2>
    <a href="dashboard.php">All Users</a>
    <a href="add_user.php">Add User</a>
</div>

<div class="content">
    <div class="header">
        <h1>Add User</h1>
    </div>

    <div class="form-container">
        <h2>Add New User</h2>
        <form method="POST" action="">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="phone_number">Phone:</label>
            <input type="text" id="phone_number" name="phone_number" required>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            
            <button type="submit">Add User</button>
        </form>
    </div>

    <?php include 'footer.php'; ?>
</div>

</body>
</html>
