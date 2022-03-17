<?php

namespace AdventOfCode\day09;

final class Neighbours
{

    public function getCorrectSmallAndHightNeighbours(array $input): int
    {
        $suma = 0;
        $something = [];
        for ($i = 0; $i < count($input); $i++){
            $something[$i] = array(str_split($input[$i], 1));
        }
        for ($i = 1; $i < count($something)-1; $i++){
            for ($a = 1; $a < strlen($input[0])-1; $a++){
                if($something[$i][0][$a] < $something[$i-1][0][$a] &&
                   $something[$i][0][$a] < $something[$i+1][0][$a] &&
                   $something[$i][0][$a] < $something[$i][0][$a-1] &&
                   $something[$i][0][$a] < $something[$i][0][$a+1]) {
                    $suma += $something[$i][0][$a]+1;
                }
            }
        }
        return $suma;
    }
}