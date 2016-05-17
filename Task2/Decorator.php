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
        <!-- Block BEGIN. Type: <?= get_class($block) ?>, ID: <?= spl_object_hash($block) ?>, Length: <?= $block->getLength() ?> -->
HERE;
        parent::render();
        echo <<<HERE
        <!-- Block END. Type: <?= get_class($block) ?>, ID: <?= spl_object_hash($block) ?> -->
HERE;

    }
}