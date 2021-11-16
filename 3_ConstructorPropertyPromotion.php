<?php
/**
 * dengan menggunakkan construcor property promotion kita 
 * tidak perlu lagi bikin  di property di class
 * 
*/
class Product {

    public function __construct(public string $id,
                                public string $name,
                                public int $qty = 0,
                                public int $price = 0)
    {
    }

}

$product = new Product(id: "1", name: "Lifebouy", qty: 10, price: 2000);
var_dump($product);

echo $product->name . PHP_EOL;