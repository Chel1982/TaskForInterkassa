<?php

abstract class Block
{
    public abstract function render();
}

class TextBlock extends Block
{
    public function render()
    {
        $block = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
        ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
        nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
        id est laborum.";
        echo $block;
    }
}

abstract class CBlock extends Block
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

class CommentDecorator extends CBlock
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