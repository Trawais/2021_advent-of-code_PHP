<?php declare(strict_types=1);

namespace AdventOfCode\day07;

final class CrabsPosition
{
    public function getLowestFuelSpend(array $input): int
    {
        $max = 0;
        for ($a = 0; $a <= max($input); $a++) {
            $sum = 0;
            for ($x = 0; $x < count($input); $x++) {
                for($s = 1; $s <= abs($input[$x]-$a); $s++) {
                    $sum+=$s;
                }
            }
            if($sum<$max || $max==0){
                $max=$sum;
            }
        }
        return $max;
    }
}
