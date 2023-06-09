<?php
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['author']) && isset($_POST['comment_text']) && isset($_POST['selected_post_id'])) {
    $author = $_POST['author'];
    $comment_text = $_POST['comment_text'];
    $post_id = $_POST['selected_post_id'];

    $sql = "INSERT INTO comments (author, comment_text, post_id) VALUES (:author, :comment_text, :post_id)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':author', $author);
    $stmt->bindParam(':comment_text', $comment_text);
    $stmt->bindParam(':post_id', $post_id);
    $stmt->execute();
  
    header("Refresh:0");
    exit();

    header("Location: posts.php?id=".$post_id);
    exit();
}

if (isset($_GET['id'])) {
    $post_id = $_GET['id'];

    $selectQuery = "SELECT * FROM posts WHERE id = :post_id";
    $selectStmt = $conn->prepare($selectQuery);
    $selectStmt->bindParam(':post_id', $post_id);
    $selectStmt->execute();
    $post = $selectStmt->fetch(PDO::FETCH_ASSOC);
} else {

    header("Location: index.php");
    exit();
}
?>

<h2 class="add-comment-h2">Ostavite vaš komentar:</h2>

<form class="add-comment" action="" method="POST">
    <label for="author">Vaše ime:</label><br>
    <input type="text" id="author" name="author" required><br><br>

    <label for="comment_text">Vaš komentar:</label><br>
    <textarea name="comment_text" rows="10" cols="60" required></textarea><br><br>

    <input type="hidden" name="selected_post_id" value="<?php echo $post['id']; ?>">

    <input type="submit" value="Pošalji komentar">
</form>

</body>
</html>
