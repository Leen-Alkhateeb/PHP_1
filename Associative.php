<?php
// 1) تعريف مصفوفة associative: المفتاح = اسم المادة، القيمة = العلامة
$grades = array("Math" => 80, "English" => 70, "Science" => 90);

echo "Math grade: " . $grades["Math"] . "<br>";

$grades["English"] = 85;

// 4) المرور على كل العناصر
foreach ($grades as $subject => $mark) {
    echo "$subject: $mark <br>";
}