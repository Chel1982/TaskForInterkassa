<?php require_once ('Decorator.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
   <?php
        $text = new CommentDecorator(new TextBlock);
        $text -> render();
   ?>
</body>
</html>

