<?php

class Products
{

    private string $name;
    private string $producer;
    private string $target;

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
}
