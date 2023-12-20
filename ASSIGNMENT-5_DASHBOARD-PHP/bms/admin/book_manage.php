<?php

include '../config/config.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add a Book</title>
</head>
<body>
    <button><a href='books.php' style='text-decoration: none; color: black;'>View Books</a></button>
    <form action="callback/book_callback.php" method="POST">
        <h2>Add a Book</h2>
        <input type="text" name="name" id="name" placeholder="Name">
        <br><br>
        <input type="text" name="category" id="category" placeholder="Category">
        <br><br>
        <input type="text" name="author" id="author" placeholder="Author">
        <br><br>
        <input type="text" name="price" id="price" placeholder="Price">
        <br><br>
        <input type="text" name="details" id="details" placeholder="Details">
        <br><br>
        <label for="image">Image:</label>
        <input type="file" name="image" id="image">
        <br><br>
        <label for="pdf">PDF:</label>
        <input type="file" name="pdf" id="pdf">
        <br><br>
        <input type="url" name="link" id="link" placeholder="YouTube Link">
        <br><br>
        <input type="text" name="store_name" id="store_name" placeholder="Store Name">
        <br><br>
        <input type="text" name="rack_no" id="rack_no" placeholder="Rack Number">
        <br><br>
        <input type="text" name="publisher" id="publisher" placeholder="Publisher">
        <br><br>
        <input type="text" name="edition" id="edition" placeholder="Edition">
        <br><br>
        <input type="text" name="language" id="language" placeholder="Language">
        <br><br>
        <input type="submit" name="submit">
    </form>
</body>
</html>