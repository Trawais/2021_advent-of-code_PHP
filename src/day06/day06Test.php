<?php declare(strict_types=1);

namespace AdventOfCode\day06;

use PHPUnit\Framework\TestCase;

final class day06Test extends TestCase
{
    public function testGivenExamplePasses(): void
    {
        $measurement = new FishTimer();
        $input = [3,4,3,1,2];
        $this->assertEquals(5934, $measurement->fishExploding($input));
    }
}
