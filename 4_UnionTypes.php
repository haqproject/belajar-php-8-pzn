<?php

class Data {
    public string|bool|array|int $data;
}

$data = new Data();
$data->data = 12;
$data->data = "Naufal";
$data->data = true;
$data->data = ["PZN", "Mantap"];

function sampleFunction(string|array $data): string|array
{
    if (is_string($data)){
        return "STRING"; 
    }else if(is_array($data)){
        return ["ARRAY"];
    }
}

var_dump(sampleFunction("Naufal"));
var_dump(sampleFunction([]));