<?php
include ('./includes/autoloader.php');
require_once('./templates/header.php');
?>



<!-- Button trigger modal -->
<div class="text-center">
    <button type="button" class="my-5 btn btn-primary" data-bs-toggle="modal" data-bs-target="#addPostModal">
        Create Post
    </button>
</div>

<!-- Modal -->
<div class="modal fade" id="addPostModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Post</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Form input -->
                <form action="post.process.php" method="POST">
                    <div class="form-group">
                        <label>Title: </label>
                        <input class="form-control" name="post-title" type="text" required>
                    </div>
                    <div class="form-group">
                        <label>Content: </label>
                        <input class="form-control" name="post-content" type="text" required>
                    </div>
                    <div class="form-group">
                        <label>Author: </label>
                        <input class="form-control" name="post-author" type="text" required>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="submit" class="btn btn-primary">Add Post</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <?php $posts = new Posts();?>
    <?php if ($posts->getPost()):?>
        <?php foreach ($posts->getPost() as $post):?>
            <div class="col-md-6 mt-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $post['title']?></h5>
                        <p class="card-text"><?php echo $post['body']?></p>
                        <h6 style="margin-bottom:10px;" class="card-subtitle text-muted text-end"><?php echo $post['author']?></h6>
                        <button class="btn btn-warning">Edit</button>
                        <button class="btn btn-danger">Delete</button>
                    </div>
                </div>
            </div>
        <?php endforeach;?>
    <?php else:?>
    <p>Post is empty</p>
    <?php endif;?>
</div>

<?php
require_once('./templates/footer.php');
?>
