<?php

abstract class Comment
{
    protected abstract function ComentBlock($coment);
}

class CommentUp extends Comment
{
    function ComentBlock($coment)
    {
        return $coment;
    }
}
class CommentDown extends Comment
{
    function ComentBlock($coment)
    {
        return $coment;
    }
}

class StrategyComment
{
    protected $com;
    public function __construct($com)
    {
        if($com == "up"){
            $this -> comm = new CommentUp();
        }elseif($com == "down"){
            $this -> comm = new CommentDown();
        }
    }

    public function getComment(){
        return $this -> comm -> ComentBlock();
    }
}