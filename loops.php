<?php

// ---------- السؤال 1: 1-2-3-...-10 بدون شرطة بالأول والآخر ----------
echo "<h3>Q1</h3>";
for ($i = 1; $i <= 10; $i++) {
    echo $i;
    if ($i < 10) echo "-";   // نطبع الشرطة فقط إذا الرقم مش الأخير
}
echo "<br>";

// ---------- السؤال 2: مجموع الأعداد من 0 إلى 30 ----------
echo "<h3>Q2</h3>";
$total = 0;
for ($i = 0; $i <= 30; $i++) {
    $total += $i;   // $total = $total + $i
}
echo $total;   // 465
echo "<br>";

// ---------- السؤال 3: نمط الحروف ----------
echo "<h3>Q3</h3>";
echo "<pre>";
for ($i = 1; $i <= 5; $i++) {          // $i = رقم الصف
    for ($j = 1; $j <= 5; $j++) {      // $j = رقم العمود
        // آخر $i أعمدة بتاخد حرف الصف (B,C,D,E) والباقي A
        if ($j > 5 - $i) {
            echo chr(64 + $i) . " ";   // chr(65)='A', chr(66)='B' ... لهيك 64+$i
        } else {
            echo "A ";
        }
    }
    echo "\n";   // سطر جديد داخل <pre>
}
echo "</pre>";

// ---------- السؤال 4: نمط الأرقام ----------
echo "<h3>Q4</h3>";
echo "<pre>";
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 5; $j++) {
        // نفس فكرة السؤال 3 بس بأرقام: آخر $i أعمدة = رقم الصف، والباقي 1
        echo ($j > 5 - $i ? $i : 1) . " ";
    }
    echo "\n";
}
echo "</pre>";

// ---------- السؤال 5: نمط القطر (Diagonal) ----------
echo "<h3>Q5</h3>";
echo "<pre>";
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 5; $j++) {
        echo ($i == $j ? $i : 0) . " ";   // لو الصف = العمود (القطر) اطبع الرقم، غير هيك 0
    }
    echo "\n";
}
echo "</pre>";

// ---------- السؤال 6: العاملي (Factorial) ----------
echo "<h3>Q6</h3>";
$n = 5;
$factorial = 1;
for ($i = 1; $i <= $n; $i++) {
    $factorial *= $i;   // 1*2*3*4*5
}
echo $factorial;   // 120
echo "<br>";

// ---------- السؤال 7: جدول الضرب ----------
echo "<h3>Q7</h3>";
echo '<table border="1" cellpadding="3px" cellspacing="0px">';
for ($i = 1; $i <= 6; $i++) {              // 6 صفوف
    echo "<tr>";                           // tr = صف
    for ($j = 1; $j <= 5; $j++) {          // 5 أعمدة
        echo "<td>$i * $j = " . ($i * $j) . "</td>";   // td = خلية
    }
    echo "</tr>";
}
echo "</table>";



// 1. Fibonacci with a for loop
$n = 10; $a = 0; $b = 1; $out = [];
for ($i = 0; $i < $n; $i++) {
    $out[] = $a;
    [$a, $b] = [$b, $a + $b];
}
echo implode(', ', $out) . ', ...';

// 2. Floyd's triangle
$n = 5; $num = 1;
for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $i; $j++) echo $num++ . ' ';
    echo "<br>";
}
//Task2
// 3. Diamond pattern A..E
$n = 5;
echo "<pre>";
for ($i = 1; $i <= 2 * $n - 1; $i++) {
    $row = $i <= $n ? $i : 2 * $n - $i;
    echo str_repeat(' ', $n - $row);
    for ($j = 0; $j < $row; $j++) echo chr(65 + $j) . ' ';
    echo "\n";
}
echo "</pre>";

?>