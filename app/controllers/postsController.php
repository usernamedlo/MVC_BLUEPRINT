<?php

function indexAction()
{
    require '../app/models/postsModel.php';
    $posts = findAll();
    global $content;
    ob_start();
    include '../app/views/posts/index.php';
    $content = ob_get_clean();
}
