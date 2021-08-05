<?php
include ('includes/autoloader.php');

$post = new Posts();

if (isset($_POST['submit']))
{
    $title = $_POST['post-title'];
    $body = $_POST['post-content'];
    $author = $_POST['post-author'];

    $post->addPost($title, $body, $author);

    header("location: {$_SERVER['HTTP_REFERER']}");

} elseif (isset($_POST['update']))
{
    $title = $_POST['post-title'];
    $body = $_POST['post-content'];
    $author = $_POST['post-author'];
    $id = $_GET['id'];

    $post->updatePost($title, $body, $author, $id);

    echo "<script>window.location.href = 'index.php'</script>";

} elseif ($_GET['send'] === 'del'){
    $id = $_GET['id'];

    $post->deletePost($id);

    header("location: {$_SERVER['HTTP_REFERER']}");
}