<?php

interface Block
{
    function Render();
}

class TextBlock implements Block
{
    public function render()
    {
       require_once("views/Text.html");
    }
}
class ImageBlock implements Block
{
    public function render()
    {
        require_once("views/Image.html");
    }
}
class ButtonBlock implements Block
{
    public function render()
    {
        require_once("views/Button.html");
    }
}


$Text = new ImageBlock();
$Text -> render();
