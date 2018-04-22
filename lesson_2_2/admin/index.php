<?php

require __DIR__ . '/../autoload.php';

// убрала ненужный метод
$data = \App\Models\Article::findAll();

// теперь вывод через view
$view = new \App\View();

// исправила на "статьи"
$view->assign('Articles', $data);
echo $view->display(__DIR__ . '/templates/index.php');