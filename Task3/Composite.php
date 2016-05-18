<?php

abstract class Block
{
    public abstract function render();
}

class TextBlock extends Block
{
    public function render()
    {
        require_once("views/Text.html");
    }
}
class ImageBlock extends Block
{
    public function render()
    {
        require_once("views/Image.html");
    }
}
class ButtonBlock extends Block
{
    public function render()
    {
        require_once("views/Button.html");
    }
}