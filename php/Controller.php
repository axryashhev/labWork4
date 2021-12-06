<?php

require_once('Product.php');

class Controller
{
    private $listProduct;

    function __construct() {
        for ($i = 0; $i < 6; $i++)
        {
            // ../css/images/shop3.jpg
            $product = Product::createBuilder()
                ->setName("Name " . $i)
                ->setDescription("Description " . $i)
                ->setPrice(10 + $i)
                ->setPhoto("../css/images/shop". ($i + 1) . ".jpg")
                ->build();
            $this->listProduct[$i] = $product;
        }
    }

    /**
     * @return mixed
     */
    public function getListProduct()
    {
        return $this->listProduct;
    }
}
