<?php declare(strict_types=1);

namespace AdventOfCode\Day01;


use PhpParser\Node\Expr\Array_;

final class DepthMeasurement
{

    public function readInput($fileName)
    {
        $myfile = fopen($fileName, "r") or die("Unable to open file!"); //https://www.w3schools.com/php/php_file_open.asp
        $loadedData = array();
        while (!feof($myfile)) {
            $loadedData[] = (int)fgets($myfile);
        }
        return $loadedData;
    }

    public function depthMeasurementIncreases(array $input): int
    {
        $previousValue = 0;
        $incSum = 0;
        for ($i = 0; $i < (count($input)); $i++) {
            if ($input[$i] > $previousValue) {
                $incSum++;
            }
            $previousValue = $input[$i];
        }

        return $incSum - 1;
    }

    public function sumMeasurementIncreases(array $input): int
    {
        $incSum = 0;
        for ($i = 0; $i < count($input) - 3; $i++) {
            $sum1 = $input[$i] + $input[$i + 1] + $input[$i + 2];
            $sum2 = $input[$i + 1] + $input[$i + 2] + $input[$i + 3];
            if ($sum2 > $sum1) {
                $incSum++;
            }
        }

        return $incSum;
    }
}
