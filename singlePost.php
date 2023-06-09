<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Single Post</title>
    <link rel="stylesheet" href="style.css">
</head>

<?php
include "connect.php";
include "single-post-header.php";

if (isset($_GET['id'])) {
    $postId = $_GET['id'];

    $sql = "SELECT id, title, body, author, created_at FROM posts WHERE id = :id";
    
    try {
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $postId);
        $stmt->execute();
        
        $post = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($post) {
            echo "<div class='single-post'>";
            echo "<h2>" . $post['title'] . "</h2>";
            echo "<p>" . $post['body'] . "</p>";
            echo "<p>Author: " . $post['author'] . "</p>";
            echo "<p>Created at: " . $post['created_at'] . "</p>";
            echo "</div>";
        
            include 'comments.php';
        } else {
            echo "Post nije pronađen.";
        }
    } catch(PDOException $e) {
        echo "Greška pri izvršavanju upita: " . $e->getMessage();
    }
} else {
    echo "Nedostaje ID posta.";
}

include "footer.php";

?>