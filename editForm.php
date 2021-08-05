<?php

require_once ('./templates/header.php');

include ('./includes/autoloader.php');

$posts = new Posts();

$post = $posts->editPost($_GET['id']);

$title = $post['title'];
$body = $post['body'];
$author = $post['author'];
$id = $post['id'];

?>

<div class="text-center my-4">
    <h3>Edit post</h3>
</div>

<div class="row">
    <div class="col-md-7 mx-auto">
        <form action="post.process.php?id=<?php echo $id ?>" method="POST">
            <div class="form-group my-1">
                <label>Title: </label>
                <input class="form-control" name="post-title" type="text" value="<?php echo $title ?>" required>
            </div>
            <div class="form-group my-1">
                <label>Content: </label>
                <textarea class="form-control" name="post-content" type="text" required><?php echo $body ?></textarea>
            </div>
            <div class="form-group my-1">
                <label>Author: </label>
                <input class="form-control" name="post-author" type="text" value="<?php echo $author ?>" required>
            </div>

            <a href="index.php" class="btn btn-secondary">Close</a>
            <button type="submit" name="update" class="btn btn-primary">Update Post</button>

        </form>
    </div>
</div>

<?php

require_once ('./templates/footer.php');

?>
