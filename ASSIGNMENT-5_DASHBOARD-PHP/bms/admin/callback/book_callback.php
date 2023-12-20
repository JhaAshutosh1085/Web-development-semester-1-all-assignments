<?php

include '../../config/config.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $category = $_POST['category'];
    $author = $_POST['author'];
    $price = $_POST['price'];
    $details = $_POST['details'];
    $image = $_POST['image'];
    $pdf = $_POST['pdf'];
    $link = $_POST['link'];
    $store_name = $_POST['store_name'];
    $rack_no = $_POST['rack_no'];
    $publisher = $_POST['publisher'];
    $edition = $_POST['edition'];
    $language = $_POST['language'];
    $created_date = date('Y-m-d H:i:s');

    $sql = "INSERT INTO books (name, category, author, price, details, image, pdf, youtube_link, store_name, rack_no, publisher, edition, language, created_date) VALUES ('$name', '$category', '$author', '$price', '$details', '$image', '$pdf', '$link', '$store_name', '$rack_no', '$publisher', '$edition', '$language', '$created_date')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Book added successfully!');</script>";
        echo "<script>window.location.href='../book_manage.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>