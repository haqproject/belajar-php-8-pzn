<?php
/**
 * Mixed type adalah type data campuran terdiri dari 
 * data array|bool|callable|int|float|null|object|resource|string
 * mixed type digunakan saat php 7 sekarang di php 8 sudah ada union type
 */

 function testMixed(mixed $data): mixed
 {
     if(is_int($data)){
         return 1;
     }elseif(is_array($data)){
         return [];
     }elseif(is_string($data)){
         return "Naufal";
     }else{
         return null;
     }
}

var_dump(testMixed([]));
var_dump(testMixed(1));
var_dump(testMixed("naufa"));
var_dump(testMixed(true));
