<?php
namespace Hello\Hello;

class HelloExample{
    public function getName(){
        return static::class;

    }

	 public function getHello(){
        return "Hello!";

    }
	public function getHelloRussian(){
        return "Hello Russian! ";

    }
    public function getHelloWorld(){
        return "Hello World! ";

    }

}

