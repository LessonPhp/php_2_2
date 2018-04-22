<?php

use App\View;

require __DIR__ . '/../autoload.php';

if(isset($_GET['id'])) {
    $id = (int) $_GET['id'];
} else {
    header('Location: /lesson_2/home_work/admin/index.php');
    die;
}

$article = \App\Models\Article::findById($id);

$view = new View();
$view->assign('Article', $article);
echo $view->display(__DIR__ . '/templates/update.php');