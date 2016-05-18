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
        echo <<<HERE
        <\!-- Block BEGIN. Type:<?= get_class() ?>
HERE;
        parent::render();
        echo <<<HERE
        Block END. Type:
HERE;

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
    public function borderDecoratorBegin()
    {
        echo "<div style='border: ".$this->border." solid ".$this->border_color."'>";
       /* echo "<style type='text/css'>
                            .brd {
                                    border: ".$this->border." solid ".$this->border_color.";
                                 }
             </style>";*/

    }
    public function borderDecoratorEnd()
    {
        echo "</div>";
    }
}