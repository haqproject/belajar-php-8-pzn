<?php

function validate(string $value)
{
    if(trim($value) == ""){
        throw new Exception("Invalid Value");
    }
}

try{
    validate("    ");
}catch(Exception){
    echo "Invalid" . PHP_EOL;
}