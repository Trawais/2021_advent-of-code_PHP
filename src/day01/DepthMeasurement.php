<?php declare(strict_types=1);

namespace AdventOfCode\day01;

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
        $incSum = 0;
        for ($i = 1; $i < (count($input)); $i++) {
            if ($input[$i] > $input[$i-1]) {
                $incSum++;
            }
        }

        return $incSum;
    }

    public function sumMeasurementIncreases(array $input): int
    {
        $incSum = 0;
        for ($i = 0; $i < count($input) - 3; $i++) {
            $currentSum = $input[$i] + $input[$i + 1] + $input[$i + 2];
            $nextSum = $input[$i + 1] + $input[$i + 2] + $input[$i + 3];
            if ($nextSum > $currentSum) {
                $incSum++;
            }
        }

        return $incSum;
    }
}
