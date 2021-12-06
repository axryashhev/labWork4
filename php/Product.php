<?php

class Product {
    private $name, $description, $price, $photo;

    static function createBuilder(): ProductBuilder {
        return new ProductBuilder();
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    function __construct(ProductBuilder $b) {
        $this->name = $b->getName();
        $this->description = $b->getDescription();
        $this->price = $b->getPrice();
        $this->photo = $b->getPhoto();
    }
}

class ProductBuilder {
    private $name, $description, $price, $photo;

    /**
     * @param mixed $name
     */
    public function setName($name): ProductBuilder
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): ProductBuilder
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price): ProductBuilder
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @param mixed $photo
     */
    public function setPhoto($photo): ProductBuilder
    {
        $this->photo = $photo;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return mixed
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    function build() {
        return new Product($this);
    }
}

?>
