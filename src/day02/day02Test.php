<?php declare(strict_types=1);

namespace AdventOfCode\Day02;

use PHPUnit\Framework\TestCase;

final class day02Test extends TestCase
{
    public function testGivenExamplePasses(): void
    {
        $measurement = new SubmarinePossition();
        $input = ["forward 5", "down 5", "forward 8", "up 3", "down 8", "forward 2"];
        $this->assertEquals(150, $measurement->depthAndPositionChange($input));
    }
}
