<?php
namespace Project\Contracts;

interface ManipulationStrategyInterface
{
    public function calculateDimensions($imageA, $imageB);
}
