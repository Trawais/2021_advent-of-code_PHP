<?php declare(strict_types=1);

namespace AdventOfCode\day09;

use PHPUnit\Framework\TestCase;
use AdventOfCode\day09\Neighbours;

final class day09Test extends TestCase
{
    public function testGivenExamplePasses(): void
    {
        $measurement = new Neighbours();
        $input = [
            "999999999999",
            "921999432109",
            "939878949219",
            "998567898929",
            "987678967899",
            "998999656789",
            "999999999999",
        ];
        $this->assertEquals(15, $measurement->getCorrectSmallAndHightNeighbours($input));
    }
}
