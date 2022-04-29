<?php

$handle = fopen("bingoInput.txt", "r");

$takenNumbers = array();
$bingoCards = array();
$bingoCounter = 0;

$takenNumbers = explode(',', preg_replace("/\r|\n/", "", fgets($handle)));

while (($line = fgets($handle)) !== false) {
    $line = preg_replace("/\r|\n/", "", $line);

    if(empty($line)) {
        $bingoCounter++;
        continue;
    }

    if(!array_key_exists($bingoCounter, $bingoCards)) {
        $bingoCards[$bingoCounter] = array(); //
    }

    $rowValues = explode(' ', trim($line));
    $rowValues = array_filter($rowValues, "is_numeric");
    $rowValues = array_values($rowValues);

    $row = array_map(function ($value) {
        $cellObject = new stdClass();
        $cellObject->value = $value;
        $cellObject->isFound = false;
        return $cellObject;
    }, $rowValues);

    $bingoCards[$bingoCounter][] = $row;
}

$winning_board = 0;
$won_number = 0;

for ($k = 0; $k < count($takenNumbers); $k++) {
    foreach ($bingoCards as $boardIndex => $singleBingoBoard) {
        for ($rowIndex = 0; $rowIndex < 5; $rowIndex++) {
            foreach($singleBingoBoard[$rowIndex] as $cellIndex => $cell) {
                if ($takenNumbers[$k] == $singleBingoBoard[$rowIndex][$cellIndex]->value && empty($winning_board)) {
                    $singleBingoBoard[$rowIndex][$cellIndex]->isFound = true;

                    if (checkRowOrColMatched($singleBingoBoard)) {
                        $winning_board = $boardIndex;
                        $won_number = $cell->value;
                        break;
                    }
                }
            }
        }
    }
}

function checkRowOrColMatched($marked_board)
{
    for ($i = 0; $i < 5; $i++) {
        // Check row
        if ($marked_board[$i][0]->isFound && $marked_board[$i][1]->isFound && $marked_board[$i][2]->isFound && $marked_board[$i][3]->isFound && $marked_board[$i][4]->isFound) {
            return true;
        }

        // Check column
        if ($marked_board[0][$i]->isFound && $marked_board[1][$i]->isFound && $marked_board[2][$i]->isFound && $marked_board[3][$i]->isFound && $marked_board[4][$i]->isFound) {
            return true;
        }
    }
    return false;
}

function getScore($index, $bingoCards)
{
    $sum = 0;
    for ($i = 0; $i < 5; $i++) {
        for ($j = 0; $j < 5; $j++) {
            if (!$bingoCards[$index][$i][$j]->isFound) {
                $sum += $bingoCards[$index][$i][$j]->value;
            }
        }
    }

    return $sum;
}

echo "\nWinning board: $winning_board";
$score = $won_number * getScore($winning_board, $bingoCards);

echo "\nScore: $score";