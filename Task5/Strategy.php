<?php

abstract class Comment
{
    protected abstract function ComentBlock();
}

class CommentUp extends Comment
{
    function ComentBlock()
    {
        echo "&lt!-- Block BEGIN. Class:".__CLASS__." -->";}
    }

class CommentDown extends Comment
{
    function ComentBlock()
    {
        echo "&lt!-- Block END. Class:".__CLASS__." -->";
    }
}

class StrategyComment
{

}