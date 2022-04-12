<?php declare(strict_types=1);

namespace AdventOfCode\day03;

use PHPUnit\Framework\TestCase;

final class day03Test extends TestCase
{
    public function testGivenExamplePasses(): void
    {
        $measurement = new BitRates();
        $input = ["00100", "11110", "10110", "10111", "10101", "01111", "00111", "11100", "10000", "11001", "00010", "01010"];
        $this->assertEquals("230", $measurement->getBitRate($input));
    }
}
