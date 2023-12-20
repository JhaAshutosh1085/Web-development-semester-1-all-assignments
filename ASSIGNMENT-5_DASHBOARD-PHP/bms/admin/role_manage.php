<?php

include '../config/config.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add a Role</title>
</head>
<body>
    <button><a href='roles.php' style='text-decoration: none; color: black;'>View Roles</a></button>

    <form action="callback/role_callback.php" method="POST">
        <h2>Add a Role</h2>
        <input type="text" name="name" id="name" placeholder="Name">
        <br><br>
        <input type="text" name="details" id="details" placeholder="Details">
        <br><br>
        <input type="submit" name="submit">
    </form>
</body>
</html>