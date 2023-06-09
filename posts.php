<?php
include "connect.php";

$sql = "SELECT id, title, body, author, created_at FROM posts ORDER BY created_at DESC";

try {
    $stmt = $conn->query($sql);

    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (!empty($results)) {
        foreach ($results as $row) {
            echo "<h2><a href='singlePost.php?id=" . $row['id'] . "'>" . $row['title'] . "</a></h2>";
            echo "<p>" . $row['body'] . "</p>";
            echo "<p>Author: " . $row['author'] . "</p>";
            echo "<p>Created at: " . $row['created_at'] . "</p>";
            echo '<hr>';
        }        
    } else {
        echo "No results.";
    }
} catch(PDOException $e) {
    echo "Error executing query: " . $e->getMessage();
}
?>
