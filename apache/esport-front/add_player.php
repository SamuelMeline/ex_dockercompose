<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add eSports Player</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Add a New eSports Player</h1>
    <form id="addPlayerForm">
        <div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="team">Team</label>
            <input type="text" id="team" name="team" required>
        </div>
        <div>
            <label for="role">Role</label>
            <input type="text" id="role" name="role" required>
        </div>
        <div>
            <label for="rating">Rating</label>
            <input type="number" id="rating" name="rating" required>
        </div>
        <div>
            <button type="submit">Add Player</button>
        </div>
    </form>
    <script src="js/add_player.js"></script>
</body>
</html>
