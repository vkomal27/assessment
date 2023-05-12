<?php
namespace Project\Strategies;

use Project\Contracts\ManipulationStrategyInterface;

class ContainStrategy implements ManipulationStrategyInterface
{
    public function calculateDimensions($imageA, $imageB)
    {
        $ratioA = $imageA['width'] / $imageA['height'];
        $ratioB = $imageB['width'] / $imageB['height'];

        if ($ratioA > $ratioB) {
            $width = $imageB['width'];
            $height = $imageB['width'] / $ratioA;
        } else {
            $width = $imageB['height'] * $ratioA;
            $height = $imageB['height'];
        }

        return ['width' => $width, 'height' => $height];
    }
}
