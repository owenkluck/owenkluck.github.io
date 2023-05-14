<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "webbook";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sortOrder = $_GET['sortOrder'];
$sql = "SELECT * FROM movies ORDER BY imdb_score $sortOrder";
$result = $conn->query($sql);

$movies = [];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $movies[] = $row;
    }
} 

echo json_encode($movies);

$conn->close();
?>
