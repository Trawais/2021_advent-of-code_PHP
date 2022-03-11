<?php declare(strict_types=1);

namespace AdventOfCode\day07;

use PHPUnit\Framework\TestCase;

final class day07Test extends TestCase
{
    public function testGivenExamplePasses(): void
    {
        $measurement = new CrabsPosition();
        $input = [16,1,2,0,4,2,7,1,2,14];
        $this->assertEquals(168, $measurement->getLowestFuelSpend($input));
    }
}
