<?php

function sayHello(string $first, string $middle = "", string $last): void
{
    echo "Hello $first $middle $last" . PHP_EOL;
}

//tanpa name argument
sayHello("Naufal", "Arinal", "Haq");
//sayHello("Naufal", "Arinal"); //eror karena arinal dianggap $middle argumet yang sudah di set default

//menggunakan named argument
//dgn menggunakan name argument kita bebas menyimpan argumet tidak harus berurutan
sayHello(first: "Naufal", last: "Haq", middle: "Arinal");
sayHello(first: "Naufal", last: "Haq");