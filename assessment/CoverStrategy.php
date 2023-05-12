<?php
namespace Project\Strategies;

use Project\Contracts\ManipulationStrategyInterface;

class CoverStrategy implements ManipulationStrategyInterface
{
    public function calculateDimensions($imageA, $imageB)
    {
        $ratioA = $imageA['width'] / $imageA['height'];
        $ratioB = $imageB['width'] / $imageB['height'];

        if ($ratioA > $ratioB) {
            $width = $imageB['height'] * $ratioA;
            $height = $imageB['height'];
        } else {
            $width = $imageB['width'];
            $height = $imageB['width'] / $ratioA;
        }

        return ['width' => $width, 'height' => $height];
    }
}
