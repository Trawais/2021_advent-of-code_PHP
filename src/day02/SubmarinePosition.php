<?php declare(strict_types=1);

namespace AdventOfCode\Day02;

final class SubmarinePosition
{
  public function depthAndPositionChange(array $input): int
  {
      $position = 0;
      $depth = 0;
      $aim = 0;

      for ($i = 0; $i < count($input); $i++) {
          $split = explode(" ", $input[$i]);

          if($split[0] == 'down'){
              $aim += $split[1];
          } elseif ($split[0] == 'up') {
              $aim -= $split[1];
          } elseif ($split[0] == 'forward'){
              $position += $split[1];
              if ($aim != 0) {
                  $depth += $split[1] * $aim;
              }
          } else {
              echo "Wrong input";
          }
      }
    return $depth*$position;
  }
}
