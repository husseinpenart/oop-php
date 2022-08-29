<?php

abstract class ThreeDimensionalShap
{
    public function __construct(array  $dimension)
    {
        $this->dimension = $dimension;
    }
   abstract public function volume(): float;

}