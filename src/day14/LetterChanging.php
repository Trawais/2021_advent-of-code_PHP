<?php declare(strict_types=1);

namespace AdventOfCode\day14;

final class LetterChanging
{
    public function changeLetters(array $input): int
    {
        $initial = "NNCB";
        $newString = "";
        $counter = 0;
        $letters = "";
        
        for ($a = 0; $a < count($input); $a++) {
            $exploded = explode(" -> ", $input[$a]);
            $letters .= $exploded[1];            
        }
        $letters = array_unique(str_split($letters, 1));
        
        while ($counter < 10) {
            $counter++;
            for ($i = 0; $i < strlen($initial) - 1; $i++) {
                $compare = $initial[$i] . $initial[$i + 1];
                for ($a = 0; $a < count($input); $a++) {
                    if (str_contains($input[$a], $compare) == 1) {
                        $exploded = explode(" -> ", $input[$a]);
                        $newString .= $initial[$i] . $exploded[1];
                    }
                }
            }
            $initial = $newString . substr($initial, -1);
            $newString = "";
        }
        
        $compare = [];
        foreach ($letters as $letter) {
            array_push($compare, substr_count($initial, $letter));
        }
        return max($compare) - min($compare);
    }
}
