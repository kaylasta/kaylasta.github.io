<?php
session_start();
if(!isset($_SESSION['loggedin'])){
    header('Location: ../pages/login.html');
    exit;
}

include 'connect.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    date_default_timezone_set('UTC'); // set timezone

    // insert the new blog post into the database with current time
    $stmt = $conn->prepare("INSERT INTO blog_posts (title, content, created_at) VALUES (?, ?, NOW())");
    $stmt->bind_param("ss", $_POST['title'], $_POST['content']); // bind parameters for insertion
    
    // redirect to viewBlog.php if insertion is successful
    if ($stmt->execute()) {
        header('Location: viewBlog.php');
        exit;
    } else {
        echo "Error: " . $stmt->error;
    }
}
?>