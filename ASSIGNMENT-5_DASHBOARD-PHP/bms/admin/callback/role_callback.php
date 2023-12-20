<?php

include '../../config/config.php';

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $details = $_POST['details'];

    $sql = "INSERT INTO role (name, details) VALUES ('$name', '$details')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Role added successfully!');</script>";
        echo "<script>window.location.href='../role_manage.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

}

?>