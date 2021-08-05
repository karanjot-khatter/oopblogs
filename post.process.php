<?php
include ('includes/autoloader.php');

$post = new Posts();

if (isset($_POST['submit']))
{
    $title = $_POST['post-title'];
    $body = $_POST['post-content'];
    $author = $_POST['post-author'];

    $post->addPost($title, $body, $author);
}