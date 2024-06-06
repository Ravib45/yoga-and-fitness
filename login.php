<?php
session_start();

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project-yoga";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['action'] === 'login') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Sanitize inputs to prevent SQL injection
    $email = mysqli_real_escape_string($conn, $email);

    // Fetch user from database
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        // Verify password
        if (password_verify($password, $user['password'])) {
            // Password is correct, return success response
            $_SESSION['userid'] = $user['id'];
            echo json_encode(['success' => true, 'userid' => $user['id']]);
        } else {
            // Password is incorrect, return failure response
            echo json_encode(['success' => false, 'error' => 'Incorrect email or password']);
        }
    } else {
        // User not found, return failure response
        echo json_encode(['success' => false, 'error' => 'User not found']);
    }
} else {
    // Invalid request, return failure response
    echo json_encode(['success' => false, 'error' => 'Invalid request']);
}

// Close connection
$conn->close();
?>
