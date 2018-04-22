<?php

require __DIR__ . '/../../autoload.php';


if(isset($_GET['id'])) {
    $id = (int)$_GET['id'];
} else {
    header('Location: /lesson_2/home_work/index.php');
    die;
}


if(isset($_POST['update'])) {
    $title = htmlspecialchars(strip_tags(trim($_POST['title'])));
    $content = htmlspecialchars(strip_tags(trim($_POST['content'])));
    $article = \App\Models\Article::findById($id);
    $article->title = $title;
    $article->content = $content;
    // исправила
    $article->save();
    header('Location: /lesson_2/home_work/index.php');
}

