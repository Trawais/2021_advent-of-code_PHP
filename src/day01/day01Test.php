<?php declare(strict_types=1);

namespace AdventOfCode\day01;

use AdventOfCode\day01\DepthMeasurement;
use PHPUnit\Framework\TestCase;

final class day01Test extends TestCase
{
    private $measurement;
    private $input;
    private $exampleInput;

    protected function setUp(): void
    {
        $this->measurement = new DepthMeasurement();
        $this->input = $this->measurement->readInput("src/day01/input.txt");
        $this->exampleInput = [199, 200, 208, 210, 200, 207, 240, 269, 260, 263];
    }

    public function testPartOneExamplePasses(): void
    {
        $this->assertEquals(7, $this->measurement->depthMeasurementIncreases($this->exampleInput));
    }

    public function testPartOneSolution(): void
    {
        $this->assertEquals(1502, $this->measurement->depthMeasurementIncreases($this->input));
    }

    public function testPartTwoExamplePasses(): void
    {
        $this->assertEquals(5, $this->measurement->sumMeasurementIncreases($this->exampleInput));
    }

    public function testPartTwoSolution(): void
    {
        $this->assertEquals(1538, $this->measurement->sumMeasurementIncreases($this->input));
    }
}
