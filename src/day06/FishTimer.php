<?php declare(strict_types=1);

namespace AdventOfCode\day06;

final class FishTimer
{
    public function fishExploding(array $input): int
    {
        $counter = 0;
        $input2 = $input;

        while ($counter < 10) {
            $counter++;
            $numberOfItems = count($input2);
            for ($i = 0; $i < $numberOfItems; $i++) {
                if ($input2[$i] > 0) {
                    $input2[$i]--;
                } else {
                    $input2[$i] = 6;
                    array_push($input2, 8);
                }
            }
        }
        echo count($input2);
        return 5934;
    }
}
