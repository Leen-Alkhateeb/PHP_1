<?php
// 1. String into an array
$str = "Twinkle, twinkle, little star.";
$arr = explode(" ", $str);
var_dump($arr);

// 2. Next letter (z -> a, Z -> A)
$ch = 'z';
if ($ch === 'z') echo 'a';
elseif ($ch === 'Z') echo 'A';
else echo chr(ord($ch) + 1);

// 3. Insert a string at a position
$s = 'The brown fox';
echo substr_replace($s, 'quick ', 4, 0);        // The quick brown fox

// 3b. (numbered "18" in the PDF) First word of a sentence
$s = 'The quick brown fox';
echo explode(' ', $s)[0];                       // The

// 4. Remove leading zeroes
echo ltrim('0000657022.24', '0');               // 657022.24

// 5. Remove trailing dashes
echo rtrim('The quick brown fox jumps over the lazy dog---', '-');

// 6. First 5 words
$s = 'The quick brown fox jumps over the lazy dog';
echo implode(' ', array_slice(explode(' ', $s), 0, 5));

// 7. Remove commas
echo str_replace(',', '', '2,543.12');           // 2543.12


?>