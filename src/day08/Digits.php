<?php declare(strict_types=1);

namespace AdventOfCode\day08;

final class Digits
{
    public function getNumberOfUniqueNumbers(array $input): int
    {
        $sum = 0;
        $string = "";
        echo "\n";
        for ($a = 0; $a < count($input); $a++) {
            $exploded = explode( "|", $input[$a]);
            $exploded = explode(" ", $exploded[1]);
            foreach ($exploded as $value) {
                switch(strlen($value)){
                    case 2:
                        $string .= "1";
                        break;
                    case 3:
                        $string .= "7";
                        break;
                    case 4:
                        $string .= "4";
                        break;
                    case 5:
                        if (str_contains($value, "a")){
                            if (str_contains($value, "g")){
                                $string .= "2";
                            } else {
                                $string .= "3";
                            }
                        } else {
                            $string .= "5";
                        }
                        break;
                    case 6:
                        if (str_contains($value, "d")){
                            if (str_contains($value, "c")){
                                $string .= "9";
                            }else {
                                $string .= "6";
                            }
                        } else {
                            $string .= "0";
                        }
                        break;
                    case 7:
                        $string .= "8";
                        break;
                }
            }
            $sum += intval($string);
            echo "Sum = " . $string . "\n";
            $string = "";
        }
        echo $sum;
        return $sum;
    }
}
