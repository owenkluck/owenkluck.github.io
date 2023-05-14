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

$title = $_POST['title'];
$imdb_score = $_POST['imdb_score'];
$summary = $_POST['summary'];

$sql = "INSERT INTO movies (title, imdb_score, summary) VALUES ('$title', '$imdb_score', '$summary')";

if ($conn->query($sql) === TRUE) {
    header("Location: movies.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
