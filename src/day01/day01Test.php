<?php declare(strict_types=1);

namespace AdventOfCode\Day01;

use AdventOfCode\Day01\DepthMeasurement;
use PHPUnit\Framework\TestCase;

final class day01Test extends TestCase
{

    public function testGivenExamplePasses(): void
    {

        $measurement = new DepthMeasurement();
        $input = $measurement->readInput("src/day01/input.txt");

        $this->assertEquals(1502, $measurement->depthMeasurementIncreases($input));
    }

     public function testPartTwoPasses(): void
    {

        $measurement = new DepthMeasurement();
        $input = $measurement->readInput("src/day01/input.txt");

        $this->assertEquals(1538, $measurement->sumMeasurementIncreases($input));
    }
}
