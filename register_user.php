<?php
// Database credentials
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
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $conn->real_escape_string($_POST["username"]);
    $email = $conn->real_escape_string($_POST["email"]);
    $password = password_hash($conn->real_escape_string($_POST["password"]), PASSWORD_BCRYPT);
    $name = $conn->real_escape_string($_POST["name"]);
    $phone = $conn->real_escape_string($_POST["phone"]);

    // SQL query to insert data into the table
    $sql = "INSERT INTO users (username, email, password, name, phone) VALUES ('$username', '$email', '$password', '$name', '$phone')";

    if ($conn->query($sql) === TRUE) {
        echo "success";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
