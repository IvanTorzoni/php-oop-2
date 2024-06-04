<?php

require_once __DIR__ . "/../traits/edible.php";
class Products
{

    use Edible;
    
    private string $name;
    private string $producer;
    private string $target;
    private int $quantity;

    public function __construct(string $name, string $producer, string $target)
    {
        $this->name         = $name;
        $this->producer     = $producer;
        $this->target       = $target;
    }

    /**
     * Get the value of name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get the value of producer
     *
     * @return string
     */
    public function getProducer()
    {
        return $this->producer;
    }

    /**
     * Get the value of target
     *
     * @return string
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * Get the value of quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set the value of quantity
     *
     * @param int $quantity
     */
    public function setQuantity(int $quantity) {
        if ($quantity <= 0) {
            throw new Exception("Pezzi esauriti");
        }
        $this->quantity = $quantity;
    }
}
