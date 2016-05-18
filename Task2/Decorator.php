<?php

abstract class Block
{
    public abstract function render();
}

class TextBlock extends Block
{
    public function render()
    {
        require_once ('Block.txt');
    }
}

abstract class BlockDecorator extends Block
{
    private $text;

    public function __construct(Block $text)
    {
        $this -> text = $text;
    }
    public function render()
    {
        $this -> text -> render();
    }
}

class CommentDecorator extends BlockDecorator
{

    public function render()
    {
        $this->commentDecoratorBegin();
        parent::render();
        $this->commentDecoratorEnd();
    }

    private function  commentDecoratorBegin()
    {
        echo "&lt!-- Block BEGIN. Type:".__CLASS__." -->";
    }

    private function commentDecoratorEnd()
    {
        echo "&lt!-- Block END. Type:".__CLASS__."-->";
    }
}

class BorderDecorator extends BlockDecorator
{
    private $border, $border_color;

    public function __construct(Block $text, $border, $border_color)
    {
        parent::__construct($text);
        $this -> border = $border;
        $this -> border_color = $border_color;
    }

    public function render()
    {
        $this->borderDecoratorBegin();
        parent::render();
        $this->borderDecoratorEnd();
    }
    private function borderDecoratorBegin()
    {
        echo "<div style='border: ".$this->border." solid ".$this->border_color."'>";

    }
    private function borderDecoratorEnd()
    {
        echo "</div>";
    }
}