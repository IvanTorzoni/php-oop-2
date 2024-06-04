<?php

trait Edible {
  private string $edible;

  /**
   * Get the value of edible
   *
   * @return string
   */
  public function getEdible()
  {
    return $this->edible;
  }

  /**
   * Set the value of edible
   *
   * @param string $edible
   *
   */
  public function setEdible(string $edible)
  {
    $this->edible = $edible;
  }
}