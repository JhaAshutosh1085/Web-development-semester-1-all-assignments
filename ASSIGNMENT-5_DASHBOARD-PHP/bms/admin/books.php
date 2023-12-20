<?php

include '../config/config.php';

$sql = "SELECT * FROM books";

$result = $conn->query($sql);

echo "<button><a href='book_manage.php' style='text-decoration: none; color: black;'>Add a Book</a></button>";

if ($result->num_rows > 0) {
    echo "<center>
    <h2><u>Books</u></h2>";
    echo "<table border='1' style='border-collapse: collapse'>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Name</th>";
    echo "<th>Category</th>";
    echo "<th>Author</th>";
    echo "<th>Price</th>";
    echo "<th>Details</th>";
    echo "<th>Image</th>";
    echo "<th>PDF</th>";
    echo "<th>YouTube Link</th>";
    echo "<th>Store Name</th>";
    echo "<th>Rack Number</th>";
    echo "<th>Publisher</th>";
    echo "<th>Edition</th>";
    echo "<th>Language</th>";
    echo "<th>Created Date</th>";
    echo "<th>Action</th>";
    echo "</tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['category']."</td>";
        echo "<td>".$row['author']."</td>";
        echo "<td>".$row['price']."</td>";
        echo "<td>".$row['details']."</td>";
        echo "<td>".$row['image']."</td>";
        echo "<td>".$row['pdf']."</td>";
        echo "<td>".$row['youtube_link']."</td>";
        echo "<td>".$row['store_name']."</td>";
        echo "<td>".$row['rack_no']."</td>";
        echo "<td>".$row['publisher']."</td>";
        echo "<td>".$row['edition']."</td>";
        echo "<td>".$row['language']."</td>";
        echo "<td>".$row['created_date']."</td>";
        echo "<td><button><a href='admin/book_edit.php?id=".$row['id']."' style='text-decoration: none; color: black;'>Edit</a></button> | <button><a href='admin/book_delete.php?id=".$row['id']."' style='text-decoration: none; color: black;'>Delete</a></button></td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "</center>";
} else {
    echo "No Data Available";
}

?>