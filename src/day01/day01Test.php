<?php declare(strict_types=1);
require '../../vendor/autoload.php';

namespace AdventOfCode\Day01;

use PHPUnit\Framework\TestCase;
use AdventOfCode\Day01\DepthMeasurement;

final class day01Test extends TestCase
{
    public function testGivenExamplePasses(): void
    {
        $measurement = new DepthMeasurement();
        $input = [199, 200, 208, 210, 200, 207, 240, 269, 260, 263];
        $this->assertEquals(7, $measurement->depthMeasurementIncreases($input));
    }
}
