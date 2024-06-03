<?php 

require_once __DIR__ . "/products.php";

class Toys extends Products {

    private string $material;
    private string $weight;

    public function __construct(string $name, string $producer, string $target, string $material, string $weight) {
        
        parent::__construct($name, $producer, $target);

        $this->material       = $material;
        $this->weight         = $weight;
    }


    /**
     * Get the value of material
     *
     * @return string
     */
    public function getMaterial(): string
    {
        return $this->material;
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