<?php

include '../config/config.php';

$sql = "SELECT * FROM role";

$result = $conn->query($sql);

echo "<button><a href='role_manage.php' style='text-decoration: none; color: black;'>Add a Role</a></button>";

if ($result->num_rows > 0) {
    echo "<center>
    <h2><u>Roles</u></h2>";
    echo "<table border='1' style='border-collapse: collapse'>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Name</th>";
    echo "<th>Details</th>";
    echo "<th>Action</th>";
    echo "</tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['details']."</td>";
        echo "<td><button><a href='admin/role_edit.php?id=".$row['id']."' style='text-decoration: none; color: black;'>Edit</a></button> | <button><a href='admin/role_delete.php?id=".$row['id']."' style='text-decoration: none; color: black;'>Delete</a></button></td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "</center>";
} else {
    echo "No Data Available";
}

?>