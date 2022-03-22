<?php declare(strict_types=1);

namespace AdventOfCode\day03;

final class BitRates
{
    public function returnRightValues($one, $zero, $oneArray, $zeroArray, $zeroOrONe)
    {
        if ($zeroOrONe==1) {
            if ($one >= $zero) {
                return $oneArray;
            } else {
                return $zeroArray;
            }
        } else {
            if ($one >= $zero) {
                return $zeroArray;
            } else {
                return $oneArray;
            }
        }
    }

    public function getOxygenGeneratorOrCo2Rating(array $value, $zeroOrOne): int
    {
        $numberOfCharInString = 0;
        
        while (count($value) > 1) {
            $zero = 0;
            $one = 0;
            $oneArray = [];
            $zeroArray = [];
            for ($numberOfRows = 0; $numberOfRows < count($value); $numberOfRows++) {
                $split = $value[$numberOfRows];
                if ($split[$numberOfCharInString] == "0") {
                    $zero++;
                    $zeroArray[] .= $split;
                } else {
                    $one++;
                    $oneArray[] .= $split;
                }
            }
            $value = $this->returnRightValues($one, $zero, $oneArray, $zeroArray, $zeroOrOne);
            $numberOfCharInString++;
        }
        return bindec($value[0]);
    }

    public function getBitRate(array $input): int
    {
        return $this->getOxygenGeneratorOrCo2Rating($input ,1) * $this->getOxygenGeneratorOrCo2Rating($input, 0);
    }
}
