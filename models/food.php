<?php 

require_once __DIR__ . "/products.php";

class Foods extends Products {

    private string $cost;
    private string $weight;

    public function __construct(string $name, string $producer, string $target, string $cost, string $weight) {
        
        parent::__construct($name, $producer, $target);

        $this->cost           = $cost;
        $this->weight         = $weight;
    }


    /**
     * Get the value of cost
     *
     * @return string
     */
    public function getCost(): string
    {
        return $this->cost;
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