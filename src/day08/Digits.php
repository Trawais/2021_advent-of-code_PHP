<?php declare(strict_types=1);

namespace AdventOfCode\day08;

final class Digits
{
    public function getNumberOfUniqueNumbers(array $input): int
    {
        $numbers = [];
        $five = [];
        $six = [];
        $result = "";
        $output = 0;

        for ($a = 0; $a < count($input); $a++) {
            $exploded = explode("|", $input[$a]);
            $firstPart = explode(" " , $exploded[0]);
            $secondPart = explode(" ", $exploded[1]);
            sort($firstPart);
            foreach($firstPart as $value) {
                switch (strlen($value)) {
                    case 2:
                        $sortString = str_split($value);
                        sort($sortString);
                        $numbers[1] = implode($sortString); ;
                        break;
                    case 3:
                        $sortString = str_split($value);
                        sort($sortString);
                        $numbers[7] = implode($sortString);
                        break;
                    case 4:
                        $sortString = str_split($value);
                        sort($sortString);
                        $numbers[4] = implode($sortString);
                        break;
                    case 5:
                        $sortString = str_split($value);
                        sort($sortString);
                        $sortString = implode($sortString);
                        array_push($five, $sortString);
                        break;
                    case 6:
                        $sortString = str_split($value);
                        sort($sortString);
                        $sortString = implode($sortString);
                        array_push($six, $sortString);
                        break;
                    case 7:
                        $sortString = str_split($value);
                        sort($sortString);
                        $numbers[8] = implode($sortString);
                }
            }
            foreach ($five as $value) {
                if (similar_text($value, $numbers[4])==3) {
                    if(similar_text($value, $numbers[1])==2) {
                        $numbers[3] = $value;
                    } else {
                        $numbers[5] = $value;
                    }
                } else {
                    $numbers[2] = $value;
                }
            }
            foreach ($six as $value) {
                if (similar_text($value, $numbers[1])==2) {
                    if (similar_text($value, $numbers[4])==4) {
                        $numbers[9] = $value;
                    } else {
                        $numbers[0] = $value;
                    }
                } else {
                    $numbers[6] = $value;
                }
            }

            foreach ($secondPart as $value) {
                $splited = str_split($value);
                sort($splited);
                $value = implode($splited);
                $result .= array_search($value, $numbers);
            }
            $output += intval($result);

            $result = "";
            $five = [];
            $six = [];
            $firstPart = [];
        }
        return $output;
    }
}
