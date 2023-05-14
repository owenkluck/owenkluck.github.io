<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "webbook";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$message = $_POST['message'];
$rating = $_POST['rating'];
$email = $_POST['email'];

$sql = "INSERT INTO feedback (message, rating, email) VALUES ('$message', '$rating', '$email')";

if ($conn->query($sql) === TRUE) {
    header("Location: feedback.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
