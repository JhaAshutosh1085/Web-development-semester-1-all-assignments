<?php

include '../../config/config.php';

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $details = $_POST['details'];
    $image = $_POST['image'];
    $created_date = date('Y-m-d H:i:s');


    $sql = "INSERT INTO categories (name, details, image, created_date) VALUES ('$name', '$details', '$image', '$created_date')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Category added successfully!');</script>";
        echo "<script>window.location.href='../category_manage.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

}

?>