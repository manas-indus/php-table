<?php
session_start(); // Start the session to access session variables
include 'config.php';

// Simulate logged-in user for demonstration
if (isset($_SESSION['name'])) {
    $loggedInUser = $_SESSION['name']; // Get the logged-in user's name from the session
} else {
    // If the session variable is not set, redirect to the login page
    header('Location: login.php');
    exit();
}

// Fetch users from the database (exclude password)
$sql = "SELECT id, name, email, phone_number FROM user";
$result = $conn->query($sql);

if (!$result) {
    die("Query failed: " . $conn->error);
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
        <h1>Welcome <?php echo htmlspecialchars($loggedInUser); ?>!</h1>
    </div>

    <table >
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone Number</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['id']}</td>
                            <td>{$row['name']}</td>
                            <td>{$row['email']}</td>
                            <td>{$row['phone_number']}</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='4' style='text-align: center;'>No records found</td></tr>";
            }
            ?>
        </tbody>
    </table>

    <?php include 'footer.php'; ?>
</div>

<?php
$conn->close();
?>
