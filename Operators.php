<?php
// 1. Leap year
$year = 2013;
if (($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0)
    echo "This year is a leap year";
else
    echo "This year is not a leap year";

// 2. Season
$temp = 27;
echo $temp < 20 ? "It is wintertime!" : "It is summertime!";

// 3. Sum, tripled if equal
$first = 2; $second = 2;
$sum = $first + $second;
if ($first == $second) echo "( $first + $second ) * 3 = " . ($sum * 3);
else echo "$first + $second = $sum";

// 4. Numbers from 200 to 250 divisible by 4
$res = [];
for ($i = 200; $i <= 250; $i++) if ($i % 4 == 0) $res[] = $i;
echo implode(',', $res);

// 5. 10 unique random numbers in a range
$min = 11; $max = 20;
$nums = range($min, $max);
shuffle($nums);
echo implode(' ', array_slice($nums, 0, 10));
?>