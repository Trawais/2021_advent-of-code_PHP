<?php declare(strict_types=1);

namespace AdventOfCode\Day02;

final class SubmarinePossition
{
  public function depthAndPositionChange(array $input): int
  {
      $position = 0;
      $depth = 0;

      for ($i = 0; $i <= count($input) - 1; $i++) {
          $splitted = explode(" ", $input[$i]);

          if($splitted[0] == 'down'){
              $depth += $splitted[1];
          } elseif ($splitted[0] == 'up') {
              $depth -= $splitted[1];
          } else {
              $position += $splitted[1];
          }
      }
    return $depth*$position;
  }
}
