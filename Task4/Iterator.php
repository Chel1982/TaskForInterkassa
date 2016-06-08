<pre>
<?php

class MyIterator implements Iterator
{
    private $arr = array();

    public function __construct(Array $array)
    {
        $this -> arr = $array;
    }
    public function rewind() {

        reset($this->arr);
    }

    public function current() {
        $arr = current($this->arr);
        return $arr;
    }

    public function key() {
        $arr = key($this->arr);
        return $arr;
    }

    public function next() {
        $arr = next($this->arr);
        return $arr;
    }

    public function valid() {
        $arr = $this->current() !== false;
        return $arr;
    }
}

$arr = array(
    "name" => "John",
    "age" => 25,
    "admin" => true
);
$it = new MyIterator($arr);

foreach ($it as $a => $b) {
    print "Ключ: $a - Значение: $b\n";
}