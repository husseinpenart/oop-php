<?php
require_once 'ThreeDimensionalShap.php';
class Sphere extends ThreeDimensionalShap
{
  public function volume(): float
  {
    return 4/3 *pi() * pow($this->dimension['radius'], 3);
  }
}