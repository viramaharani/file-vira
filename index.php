<?php 
 echo "Hello, PHP!"
 // class MyClass
{
	public $prop1 = "I'am a class property!";
}
class YourClass
{
	public $prop1 = "You are a class property!";
}

$obj = new MyClass;
$obj2 = new YourClass;

var_dump($obj, $obj2);
// var_dump($obj 2)
?>