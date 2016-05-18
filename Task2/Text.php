<?php require_once ('Decorator.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
   <?php

   /*$comm = new CommentDecorator(new TextBlock);
   $comm -> render();*/
   $border = "2px";
   $border_color = "green";
   $style = new BorderDecorator(new TextBlock,$border,$border_color);
   $style  -> render();

   ?>
</body>
</html>

