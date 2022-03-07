<?php declare(strict_types=1);

namespace AdventOfCode\Day01;


use PhpParser\Node\Expr\Array_;

final class DepthMeasurement
{

    public function readInput($fileName) {
        $myfile = fopen($fileName, "r") or die("Unable to open file!"); //https://www.w3schools.com/php/php_file_open.asp
        $loadedData = array();
        while (!feof($myfile)) {
            $loadedData[] = (int) fgets($myfile);
        }
        return $loadedData;
    }

    public function depthMeasurementIncreases(array $input): int
    {
        $data = $this->readInput("src/day01/input.txt");
        $previousValue = 0;
        $incSum = 0;
        for ($i = 0; $i < (count($data)); $i++){
        if($data[$i] > $previousValue){
        $incSum++;
        }
        $previousValue = $data[$i];
        }

        return $incSum - 1;
    }
}
