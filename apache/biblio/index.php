<?php
$servername = "srvmysql";
$username = "root";
$password = "password1234";
$dbname = "library";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, title, author, genre FROM books";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Books</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>List of Books in the Library</h1>
    <div id="books">
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<div class='book-card'>";
                echo "<h3>" . $row["title"] . "</h3>";
                echo "<p>Author: " . $row["author"] . "</p>";
                echo "<p>Genre: " . $row["genre"] . "</p>";
                echo "</div>";
            }
        } else {
            echo "No books found.";
        }
        $conn->close();
        ?>
    </div>
</body>
</html>
