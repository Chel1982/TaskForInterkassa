<?php require_once ('Strategy.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Strategy</title>
</head>
<body>
    <form name="up" method="post" action="">
        Ваш комментарий: <br />
        <input name="comm" type="text" size="25" maxlength="30" value="" />
        <input type="submit" name="up" value="Включить комментарий вверху блока" />
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $up = $_POST['up'];
        $com = $_POST['comm'];
    }
        $obj = new StrategyComment($up);
        $obj->ComentBlock($com);

     ?>
    <div>
        <h2>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
            nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
            id est laborum.
        </h2>
    </div>
    <form name="down" method="post" action="">
        Ваш комментарий: <br />
        <input name="comm1" type="text" size="25" maxlength="30" value="" />
        <input type="submit" name="down" value="Включить комментарий внизу блока" />
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $down = $_POST['comm1'];
        $com = $_POST['down'];
    }
    $obj = new StrategyComment($down);
    $obj -> ComentBlock($com);

    ?>
</body>
</html>