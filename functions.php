<?php

echo "<h3>Q1</h3>";
function isPrime($n) {
    if ($n < 2) return false;                 // الأعداد أقل من 2 مش أولية
    for ($i = 2; $i * $i <= $n; $i++) {       // بنجرب القسمة لحد الجذر التربيعي للرقم
        if ($n % $i == 0) return false;       // % = باقي القسمة. لو باقي = 0 يعني الرقم بينقسم فهو مش أولي
    }
    return true;
}
$number = 3;
echo isPrime($number) ? "$number is a prime number" : "$number is not a prime number";
echo "<br>";

// ---------- السؤال 2: عكس نص ----------
echo "<h3>Q2</h3>";
$str = "remove";
echo strrev($str);   // strrev = string reverse
echo "<br>";

// ---------- السؤال 3: تبديل (Swap) متغيرين ----------
echo "<h3>Q3</h3>";
// & قبل اسم المتغير معناها "مرر بالمرجع" يعني الدالة بتغير المتغير الأصلي نفسه مش نسخة
function swap(&$a, &$b) {
    $temp = $a;   // نخزن قيمة a مؤقتاً
    $a = $b;      // a ياخد قيمة b
    $b = $temp;   // b ياخد قيمة a القديمة
}
$x = 12;
$y = 10;
swap($x, $y);
echo "y=$y x=$x";   // y=12 x=10
echo "<br>";

// ---------- السؤال 4: Armstrong number ----------
echo "<h3>Q4</h3>";
function isArmstrong($num) {
    $sum = 0;
    $temp = $num;
    while ($temp > 0) {
        $digit = $temp % 10;          // آخر رقم
        $sum += $digit ** 3;          // ** = أس. نجمع مكعب الرقم (حسب تعريف التاسك)
        $temp = intdiv($temp, 10);    // نشيل آخر رقم (قسمة صحيحة)
    }
    return $sum == $num;              // 4³ + 0³ + 7³ = 407
}
$n = 407;
echo isArmstrong($n) ? "$n is Armstrong Number" : "$n is not Armstrong Number";
echo "<br>";

// ---------- السؤال 5: Palindrome ----------
echo "<h3>Q5</h3>";
function isPalindrome($text) {
    $clean = strtolower($text);                    // نحول لحروف صغيرة
    $clean = preg_replace('/[^a-z0-9]/', '', $clean); // نشيل أي شي مش حرف/رقم (فواصل، مسافات، علامات)
    return $clean === strrev($clean);              // لو النص = معكوسه فهو palindrome
}
$sentence = "Eva, can I see bees in a cave?";
echo isPalindrome($sentence) ? "Yes it is a palindrome" : "No it is not a palindrome";
echo "<br>";

// ---------- السؤال 6: حذف التكرار من مصفوفة ----------
echo "<h3>Q6</h3>";
function removeDuplicates($arr) {
    // array_unique بتشيل المكرر، و array_values بتعيد ترقيم المفاتيح 0,1,2...
    return array_values(array_unique($arr));
}
$array1 = array(2, 4, 7, 4, 8, 4);
echo "<pre>";
print_r(removeDuplicates($array1));   // 2, 4, 7, 8
echo "</pre>";