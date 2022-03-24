<?php declare(strict_types=1);

namespace AdventOfCode\day14;

use AdventOfCode\day14\LetterChanging;
use PHPUnit\Framework\TestCase;

final class day14Test extends TestCase
{
    public function testGivenExamplePasses(): void
    {
        $measurement = new LetterChanging();
        $input = ["CH -> B",
            "HH -> N",
            "CB -> H",
            "NH -> C",
            "HB -> C",
            "HC -> B",
            "HN -> C",
            "NN -> C",
            "BH -> H",
            "NC -> B",
            "NB -> B",
            "BN -> B",
            "BB -> N",
            "BC -> B",
            "CC -> N",
            "CN -> C",
        ];
        $this->assertEquals(1588, $measurement->changeLetters($input));
    }
}
