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

abstract class BlockComposite extends Block
{

}

class BlComposite extends BlockComposite
{
    protected $obj = array();

    public function render()
    {
        return $this;
    }

    public function addObj(Block $block)
    {
        array_push ($this -> obj , $block);
    }

    public function renderComposition()

    {
        foreach($this -> obj as $item){
            echo $item->render();

        }
    }
}

$block = new BlComposite();
$block -> addObj(new TextBlock);
$block -> addObj(new ButtonBlock);
$block -> addObj(new ImageBlock);
$block ->renderComposition();