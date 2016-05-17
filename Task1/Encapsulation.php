<?php

class Block
{
    protected $text;

    public function __construct($text)
    {
        $this -> text = $text;
    }
}

class TextBlock extends Block
{
    public function render()
    {
        require_once("views/Text.html");
    }
    public function adminSay()
    {
        echo $this -> text."<br>";
    }
}

class ImageBlock extends Block
{
    public function render()
    {
        require_once("views/Image.html");
    }

    public function adminSay()
    {
        echo $this -> text."<br>";
    }
}

class ButtonBlock extends Block
{
    public function render()
    {
        require_once("views/Button.html");
    }

    public function adminSay()
    {
        echo $this -> text."<br>";
    }
}

$text = new ButtonBlock("Hello, This's admin!!");
$text -> adminSay();
$text -> render();