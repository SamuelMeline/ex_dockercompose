<?php
$servername = "srvmysql";
$username = "root";
$password = "password1234";
$dbname = "library";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error . "<br>");
}
echo "Connected successfully to MySQL<br>";

// Vérifier si la base de données existe
$sql = "SHOW DATABASES LIKE '$dbname'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Database already exists<br>";
} else {
    // Créer la base de données si elle n'existe pas
    $sql = "CREATE DATABASE $dbname";
    if ($conn->query($sql) === TRUE) {
        echo "Database created successfully<br>";
    } else {
        echo "Error creating database: " . $conn->error . "<br>";
    }
}

// Create table
$conn->select_db($dbname);
$sql = "CREATE TABLE books (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(50) NOT NULL,
    author VARCHAR(50) NOT NULL,
    genre VARCHAR(50) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table books created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error . "<br>";
}

$conn->close();
?>
