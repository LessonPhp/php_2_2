<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Обновить новость</title>
</head>
<body>
<h3>Обновить новость</h3>
<form method="post" action="/lesson_2/home_work/admin/active/update.php?id=<?php echo $this->data['Article']->id; ?>">
    <input type="text" name="title" value="<?php echo $this->data['Article']->title; ?>"><br>
    <textarea name="content" style="resize: none;"><?php echo $this->data['Article']->content; ?></textarea><br>
    <button type="submit" name="update">Обновить новость</button>
    <a href="/lesson_2/home_work/admin/index.php">назад</a>
</form>
</body>
</html>