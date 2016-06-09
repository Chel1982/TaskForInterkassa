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
        if($com == "comm"){
            $this -> comm = new CommentUp();
        }elseif($com == "comm1"){
            $this -> comm = new CommentDown();
        }
    }

    public function getComment(){
        return $this -> comm -> ComentBlock();
    }
}