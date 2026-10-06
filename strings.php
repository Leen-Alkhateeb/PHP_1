<?php
// ---------- السؤال 1: تحويلات النص ----------
echo "<h3>Q1</h3>";
$text = "hello world from php";   // ممكن تستبدله بـ $_POST['text'] لو بدك المستخدم يدخله من form
echo strtoupper($text) . "<br>";   // a. كل الحروف كبيرة
echo strtolower($text) . "<br>";   // b. كل الحروف صغيرة
echo ucfirst($text) . "<br>";      // c. أول حرف من النص كبير
echo ucwords($text) . "<br>";      // d. أول حرف من كل كلمة كبير

// ---------- السؤال 2: تحويل '085119' لصيغة وقت ----------
echo "<h3>Q2</h3>";
$s = '085119';
$parts = str_split($s, 2);        // بتقسم النص كل حرفين: ['08','51','19']
echo implode(':', $parts);        // بتجمعهم وبينهم نقطتين :
echo "<br>";

// ---------- السؤال 3: هل الجملة فيها كلمة معينة؟ ----------
echo "<h3>Q3</h3>";
$sentence = 'I am a full stack developer at orange coding academy';
$word = 'Orange';
// stripos بتدور على الكلمة بدون اهتمام لحالة الأحرف (Orange = orange)
// بترجع مكان الكلمة أو false لو ما لقيتها، لهيك نقارن بـ !== false
if (stripos($sentence, $word) !== false) {
    echo "Word Found!";
} else {
    echo "Word Not Found!";
}
echo "<br>";

// ---------- السؤال 4: اسم الملف من الرابط ----------
echo "<h3>Q4</h3>";
$url = 'www.orange.com/index.php';
echo basename($url);   // basename بترجع الجزء الأخير بعد آخر /
echo "<br>";

// ---------- السؤال 5: اسم المستخدم من الإيميل ----------
echo "<h3>Q5</h3>";
$email = 'info@orange.com';
echo strstr($email, '@', true);   // true = رجّع كل شي "قبل" أول @
// طريقة ثانية: echo explode('@', $email)[0];
echo "<br>";

// ---------- السؤال 6: آخر 3 أحرف ----------
echo "<h3>Q6</h3>";
echo substr($email, -3);   // الرقم السالب = العد من آخر النص
echo "<br>";

// ---------- السؤال 7: كلمة سر عشوائية (بدون rand) ----------
echo "<h3>Q7</h3>";
$chars = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
$length = 8;                                   // طول كلمة السر
$shuffled = str_shuffle($chars);               // بتخلط ترتيب الأحرف عشوائياً
echo substr($shuffled, 0, $length);            // ناخد أول 8 أحرف من النص المخلوط
echo "<br>";

// ---------- السؤال 8: استبدال أول كلمة بالجملة ----------
echo "<h3>Q8</h3>";
$sentence = 'That new trainee is so genius.';
$newWord = 'Our';
$parts = explode(' ', $sentence, 2);   // بتقسم عند أول مسافة فقط: ['That', 'new trainee is so genius.']
echo $newWord . ' ' . $parts[1];       // Our new trainee is so genius.
echo "<br>";