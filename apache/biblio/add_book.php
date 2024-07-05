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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    $author = $_POST["author"];
    $genre = $_POST["genre"];

    $sql = "INSERT INTO books (title, author, genre) VALUES ('$title', '$author', '$genre')";

    if ($conn->query($sql) === TRUE) {
        echo "New book added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add a Book</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Add a New Book</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div>
            <label for="title">Title</label>
            <input type="text" id="title" name="title" required>
        </div>
        <div>
            <label for="author">Author</label>
            <input type="text" id="author" name="author" required>
        </div>
        <div>
            <label for="genre">Genre</label>
            <input type="text" id="genre" name="genre" required>
        </div>
        <div>
            <button type="submit">Add Book</button>
        </div>
    </form>
</body>
</html>
