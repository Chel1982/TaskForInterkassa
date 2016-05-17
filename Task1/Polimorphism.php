<?php

interface Block
{
    function render();
}

class TextBlock implements Block
{
    public function render()
    {
        echo "Это текстовая страница";
        require_once("views/Text.html");
        echo "<hr>";
    }
}
class ImageBlock implements Block
{
    public function render()
    {
        echo "Это страница с картинкой";
        require_once("views/Image.html");
        echo "<hr>";
    }
}
class ButtonBlock implements Block
{
    public function render()
    {
        echo "Это страница с кнопкой";
        require_once("views/Button.html");
        echo "<hr>";
    }
}

$text = new TextBlock();
$image = new ImageBlock();
$button = new ButtonBlock();

$publication = array($text, $image, $button);

foreach($publication as $item){
    echo "<pre>";
    $item -> render();
    echo "</pre>";
}