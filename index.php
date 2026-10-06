<?php

// ---------- السؤال 1: مجموع رقمين = 30؟ ----------
echo "<h3>Q1</h3>";
function sumIs30($a, $b) {
    if ($a + $b == 30) {
        return $a + $b;   // الشرط صح: نرجع المجموع
    }
    return false;         // غير هيك: false
}
$result = sumIs30(10, 10);
// echo false بتطبع فراغ، لهيك نستخدم var_export عشان تطبع الكلمة 'false' فعلياً
var_export($result);
echo "<br>";

// ---------- السؤال 2: مضاعف للرقم 3؟ ----------
echo "<h3>Q2</h3>";
$number = 20;
// لو باقي القسمة على 3 = 0 يعني الرقم من مضاعفات 3
var_export($number % 3 == 0);
echo "<br>";

// ---------- السؤال 3: الرقم ضمن [20-50] شامل؟ ----------
echo "<h3>Q3</h3>";
$number = 50;
// && تعني "و": لازم الشرطين يتحققوا. >= و <= تشمل الحدود نفسها (inclusive)
var_export($number >= 20 && $number <= 50);
echo "<br>";

// ---------- السؤال 4: أكبر رقم من ثلاثة ----------
echo "<h3>Q4</h3>";
$a = 1; $b = 5; $c = 9;
if ($a >= $b && $a >= $c) {
    echo $a;
} elseif ($b >= $a && $b >= $c) {
    echo $b;
} else {
    echo $c;
}
// الطريقة المختصرة: echo max($a, $b, $c);
echo "<br>";

// ---------- السؤال 5: فاتورة الكهرباء ----------
echo "<h3>Q5</h3>";
function electricityBill($units) {
    $bill = 0;
    if ($units <= 50) {
        $bill = $units * 2.50;                                     // أول 50 وحدة
    } elseif ($units <= 150) {
        $bill = 50 * 2.50 + ($units - 50) * 5.00;                  // الـ 100 التالية
    } elseif ($units <= 250) {
        $bill = 50 * 2.50 + 100 * 5.00 + ($units - 150) * 6.20;    // الـ 100 اللي بعدها
    } else {
        $bill = 50 * 2.50 + 100 * 5.00 + 100 * 6.20 + ($units - 250) * 7.50;  // فوق 250
    }
    return $bill;
}
$units = 300;
echo "Units: $units , Bill: " . electricityBill($units) . " JOD";   // مثال: 125 + 500 + 620 + 375 = 1620
echo "<br>";

// ---------- السؤال 6: آلة حاسبة ----------
echo "<h3>Q6</h3>";
// هاي الحاسبة بتستخدم نموذج HTML (form) يرسل البيانات بطريقة POST للصفحة نفسها
$calcResult = "";
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['num1'], $_POST['num2'], $_POST['op'])) {
    $n1 = (float) $_POST['num1'];   // (float) تحول النص لرقم
    $n2 = (float) $_POST['num2'];
    switch ($_POST['op']) {         // switch بديل مرتب عن if كثيرة
        case '+': $calcResult = $n1 + $n2; break;
        case '-': $calcResult = $n1 - $n2; break;
        case '*': $calcResult = $n1 * $n2; break;
        case '/':
            $calcResult = ($n2 == 0) ? "Cannot divide by zero" : $n1 / $n2;   // ممنوع القسمة على صفر
            break;
    }
}
?>
<form method="post">
    <input type="number" step="any" name="num1" required>
    <select name="op">
        <option value="+">+ Addition</option>
        <option value="-">- Subtraction</option>
        <option value="*">* Multiplication</option>
        <option value="/">/ Division</option>
    </select>
    <input type="number" step="any" name="num2" required>
    <button type="submit">Calculate</button>
</form>
<?php
if ($calcResult !== "") echo "Result: $calcResult";
echo "<br>";

// ---------- السؤال 7: أهلية التصويت ----------
echo "<h3>Q7</h3>";
$age = 15;
if ($age >= 18) {
    echo "is eligible to vote";
} else {
    echo "is not eligible to vote";
}
echo "<br>";

// ---------- السؤال 8: موجب / سالب / صفر ----------
echo "<h3>Q8</h3>";
$num = -60;
if ($num > 0) {
    echo "Positive";
} elseif ($num < 0) {
    echo "Negative";
} else {
    echo "Zero";
}
echo "<br>";

// ---------- السؤال 9: العلامة (Grade) من المعدل ----------
echo "<h3>Q9</h3>";
$scores = array(60, 86, 95, 63, 55, 74, 79, 62, 50);
$avg = array_sum($scores) / count($scores);   // المعدل = 624 / 9 = 69.33
if ($avg < 60) {
    $grade = 'F';
} elseif ($avg < 70) {
    $grade = 'D';
} elseif ($avg < 80) {
    $grade = 'C';
} elseif ($avg < 90) {
    $grade = 'B';
} else {
    $grade = 'A';
}
echo $grade;   // D
echo "<br>";

</body>
</html>
