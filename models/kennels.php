<?php 

require_once __DIR__ . "/products.php";

class Kennels extends Products {

    private string $dimension;
    private string $weight;

    public function __construct(string $name, string $producer, string $target, string $dimension, string $weight) {
        
        parent::__construct($name, $producer, $target);

        $this->dimension      = $dimension;
        $this->weight         = $weight;
    }


    /**
     * Get the value of dimension
     *
     * @return string
     */
    public function getDimension(): string
    {
        return $this->dimension;
    }

    /**
     * Get the value of weight
     *
     * @return string
     */
    public function getWeight(): string
    {
        return $this->weight;
    }
}