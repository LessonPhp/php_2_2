<?php

require __DIR__ . '/../../autoload.php';

if(isset($_GET['id'])) {
    $id = (int)$_GET['id'];
} else {
    header('Location: /lesson_2/home_work/admin/index.php');
    die;
}

// убрала ненужный метод
$article = \App\Models\Article::findById($id);
$article->delete();
header('Location: /lesson_2/home_work/admin/index.php');
die;