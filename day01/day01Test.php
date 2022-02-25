<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Currys\AdventOfCode\DepthMeasurement;

final class day01Test extends TestCase
{
    public function testGivenExamplePasses(): void
    {
        $c = new DepthMeasurement;
        $input = [199, 200, 208, 210, 200, 207, 240, 269, 260, 263];
        $this->assertEquals(7, $c->depthMeasurementIncreases($input));
    }
}
