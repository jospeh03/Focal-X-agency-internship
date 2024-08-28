<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP CRUD Operations</title>
</head>
<body>
    <h1>PHP CRUD Operations</h1>
    
    <!-- Create -->
    <h2>Create</h2>
    <form method="post" action="process.php">
        <input type="hidden" name="action" value="create">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <button type="submit">Create</button>
    </form>
    
    <!-- Read -->
    <h2>Read</h2>
    <form method="post" action="process.php">
        <input type="hidden" name="action" value="read">
        <button type="submit">Read All Items</button>
    </form>
    
    <!-- Update -->
    <h2>Update</h2>
    <form method="post" action="process.php">
        <input type="hidden" name="action" value="update">
        <label for="id">ID:</label>
        <input type="text" id="id" name="id" required>
        <label for="name">New Name:</label>
        <input type="text" id="name" name="name" required>
        <button type="submit">Update</button>
    </form>
    
    <!-- Delete -->
    <h2>Delete</h2>
    <form method="post" action="process.php">
        <input type="hidden" name="action" value="delete">
        <label for="id">ID:</label>
        <input type="text" id="id" name="id" required>
        <button type="submit">Delete</button>
    </form>

</body>
</html>
