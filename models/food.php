<?php 

class Foods{
    private string $price;
    private string $weight;
  
    public function __construct(string $price, string $weight) {
      
      $this->price          = $price;
      $this->weight         = $weight;
    }

    

    /**
     * Get the value of price
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Get the value of weight
     *
     * @return string
     */
    public function getWeight()
    {
        return $this->weight;
    }


    /**
     * Set the value of price
     *
     * @param string $price
     *
     * @return self
     */
    public function setPrice(string $price)
    {
        $this->price = $price;

        return $this;
    }
}