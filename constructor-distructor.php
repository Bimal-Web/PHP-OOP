<?php
class Myclass{
    function __construct(){
        echo "This is construcor";            //firstly construcor is called


    }
    function show(){
        echo "This is a function";
    }
    function __destruct(){
        echo "This is destructor";                    // Then the destructor is called after the constructor
    }
}

$obj= new Myclass();
$obj-> show();

?>