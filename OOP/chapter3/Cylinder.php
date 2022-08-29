<?php
require_once 'NonCuboidShape.php';
class Cylinder extends NonCuboidShape
{
  public function volume(): float
  {
    // TODO: Implement volume() method.
      return pi() * pow($this->dimension['radius'],2) * $this->dimension['height'];
}
}