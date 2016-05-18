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
         Block BEGIN. Type:
HERE;
        parent::render();
        echo <<<HERE
         Block END. Type:
HERE;

    }
}