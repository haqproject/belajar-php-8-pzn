<?php
//match expression mirip bisa digunakan swith/if tapi lebih sederhana dalam penulisan nya
//match expression hanya cocok digunkan untuk kasus yg sederhana
$value = "A";
$result = "";

switch($value){
    case "A":
        $result = "Anda Lulus Ujian";
        break;
    case "B":
        $result = "Anda Lulus Ujian";
        break;
    case "C":
        $result = "Anda Lulus Ujian";
        break;
    case "D":
        $result = "Anda Tidak Lulus Ujian";
        break;
    case "E":
        $result = "Anda Salah Jurusan";
        break;
    default: 
        $result = "Anda tidak ikut ujian";
}

echo $result . PHP_EOL;

$result = match($value){
    "A", "B", "C" => "Anda Lulus Ujian",
    "D" => "Anda Tidak Lulus",
    "E" => "Anda Salah Jurusan",
    default => "Anda tidak ikut ujian"
};

echo $result . PHP_EOL;

$value = 0;

$result = match(true){
    $value >= 80 => "A",
    $value >= 70 => "B",
    $value >= 60 => "C",
    $value >= 50 => "D",
    default => "E"
};

echo $result . PHP_EOL;

$name = "Bu Iman";

$result = match(true){
    str_contains($name, "Pak") => "Hello Pak",
    str_contains($name, "Bu") => "Hello BU",
    default => "Hello"
};

echo $result . PHP_EOL;

