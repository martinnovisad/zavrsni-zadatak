<?php
include "connect.php";

include "add-comment.php";

if (isset($_GET['id'])) {

    $sql = "SELECT id, author, comment_text, post_id FROM comments WHERE post_id = :post_id";

    try {
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':post_id', $postId);
        $stmt->execute();

        $comments = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if (!empty($comments)) {
            echo '<div class="comments-section">';
            echo '<h3 class="komentari">Komentari:</h3>';
            echo '<ul class="comments-list">';

            foreach ($comments as $comment) {
                echo '<li class="li-comment">';
                echo '<div class="comment">';
                echo '<span class="comment-author">' . 'Autor: ' . $comment['author'] . '</span>';
                echo '<p class="comment-content">' . $comment['comment_text'] .'</p>';
                echo '</div>';
                echo '</li>';
            }

            echo '</ul>';
            echo '</div>';
        } else {
            echo '<p class="no-comments">No comments yet!</p>';
        }
    } catch(PDOException $e) {
        echo 'Error executing query: ' . $e->getMessage();
    }
} else {
    echo '<p>Missing post ID.</p>';
}

?>
