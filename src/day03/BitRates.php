<?php declare(strict_types=1);

namespace AdventOfCode\day03;

final class BitRates
{
    public function getBitRate(array $input): int
    {
        $gama = "";
        $epsilon = 0;
        $zero = 0;
        $one = 0;
        $oxygenGenerator = $input;
        $co2Rating = $input;
        $numberOfCharInString = 0;
        $zeroArray = [];
        $oneArray = [];

        while(count($oxygenGenerator)>1) {
            for ($numberOfRows = 0; $numberOfRows < count($oxygenGenerator); $numberOfRows++) {
                $split = $oxygenGenerator[$numberOfRows];
                if ($split[$numberOfCharInString] == "0") {
                    $zero++;
                    $zeroArray[] .= $split;
                } else {
                    $one++;
                    $oneArray[] .= $split;
                }
            }
            if ($one >= $zero) {
                $gama .= "1";
                $epsilon .= "0";
                $oxygenGenerator = $oneArray;
            } else {
                $gama .= "0";
                $epsilon .= "1";
                $oxygenGenerator = $zeroArray;
            }

            $zero = 0;
            $one = 0;
            $oneArray = [];
            $zeroArray = [];
            $numberOfCharInString++;
        }

        $numberOfCharInString = 0;

        while(count($co2Rating)>1) {
            for ($numberOfRows = 0; $numberOfRows < count($co2Rating); $numberOfRows++) {
                $split = $co2Rating[$numberOfRows];
                if ($split[$numberOfCharInString] == "0") {
                    $zero++;
                    $zeroArray[] .= $split;
                } else {
                    $one++;
                    $oneArray[] .= $split;
                }
            }
            if ($one >= $zero) {
                $gama .= "1";
                $epsilon .= "0";
                $co2Rating = $zeroArray;
            } else {
                $gama .= "0";
                $epsilon .= "1";
                $co2Rating = $oneArray;
            }

            $zero = 0;
            $one = 0;
            $oneArray = [];
            $zeroArray = [];
            $numberOfCharInString++;
        }
        return bindec($oxygenGenerator[0]) * bindec($co2Rating[0]);
    }
}
