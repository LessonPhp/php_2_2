<?php
require __DIR__ . '/autoload.php';


if(isset($_GET['id'])) {
        $id = (int)$_GET['id'];
    } else {
        header('Location: /lesson_2/home_work/index.php');
        die;
}

$article = \App\Models\Article::findById($id);

// теперь вывод через view
$view = new \App\View();
$view->assign('Article', $article);

echo $view->display(__DIR__ . '/templates/article.php');
