<?php
require __DIR__. '/../autoload.php';


use App\Db;
$db = new Db();


// вариант 1 с  использованием update()

/*
$article = \App\Models\Article::findById(33);

var_dump($article);


$article->title = 'New новость 7';
$article->content = 'New Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia,
                     looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage,
                     and going through the cites of the word in classical literature, discovered the undoubtable
                     source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum"
                     (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the
                     theory of ethics, very popular during the Renaissance.';

$article->update();
var_dump($article);
*/

// вариант 2 с  использованием save()


$article = \App\Models\Article::findById(37);

var_dump($article);


$article->title = 'New новость 7';
$article->content = 'New Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia,
                     looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage,
                     and going through the cites of the word in classical literature, discovered the undoubtable
                     source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum"
                     (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the
                     theory of ethics, very popular during the Renaissance.';

$article->save();
var_dump($article);

