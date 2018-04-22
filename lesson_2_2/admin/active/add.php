<?php

require __DIR__ . '/../../autoload.php';

if(isset($_POST['add'])) {
    $title = htmlspecialchars(strip_tags(trim($_POST['title'])));
    $content = htmlspecialchars(strip_tags(trim($_POST['content'])));
    $article = new \App\Models\Article();
    $article->title = $title;
    $article->content = $content;
    // исправила
    $article->save();
    header('Location: /lesson_2/home_work/admin/index.php');
    die;
}