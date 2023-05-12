<?php
namespace Project;

use Project\Contracts\ManipulationStrategyInterface;

class ImageManipulator
{
    private $strategy;

    public function __construct(ManipulationStrategyInterface $strategy)
    {
        $this->strategy = $strategy;
    }

    public function setStrategy(ManipulationStrategyInterface $strategy)
    {
        $this->strategy = $strategy;
    }

    public function manipulateImage($imageA, $imageB)
    {
        return $this->strategy->calculateDimensions($imageA, $imageB);
    }
}
