<?php
namespace Project\Tests;

use Project\ImageManipulator;
use Project\Strategies\ContainStrategy;
use Project\Strategies\CoverStrategy;
use PHPUnit\Framework\TestCase;

class ImageManipulatorTest extends TestCase
{
    public function testContainStrategy()
    {
        $imageA = ['width' => 180, 'height' => 250];
        $imageB = ['width' => 360, 'height' => 200];

        $manipulator = new ImageManipulator(new ContainStrategy());
        $result = $manipulator->manipulateImage($imageA, $imageB);

        $this->assertEquals(200, $result['width']);
        $this->assertEquals(277.77777777778, $result['height'], '', 0.0001);
    }

    public function testCoverStrategy()
    {
        $imageA = ['width' => 180, 'height' => 250];
        $imageB = ['width' => 360, 'height' => 200];

        $manipulator = new ImageManipulator(new CoverStrategy());
        $result = $manipulator->manipulateImage($imageA, $imageB);

        $this->assertEquals(400, $result['width']);
        $this->assertEquals(277.77777777778, $result['height'], '', 0.0001);
    }
}
