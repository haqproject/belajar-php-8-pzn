<?php
//sebelum menggunakan throw exception
function sayHello(?string $name)
{
    if($name == null){
        throw new Exception("Tidak boleh null!");
    }
    
    echo "Hello $name" . PHP_EOL;
}

//sesudah menggunakan throw exception
function sayHelloException(?string $name)
{
    $result = $name != null ? "Hello $name" : throw new Exception("Tidak boleh null!");

    echo $result . PHP_EOL;
}

sayHelloException("null");