<?php
class Myclass{
    public $a=10;
    function Showvalue(){
        echo $this->a;  //using this-keyword 
    }
}

$obj= new Myclass();
echo $obj->a;

?>