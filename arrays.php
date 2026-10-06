<?php

echo "<h3>Q1</h3>";
$colors = array('white', 'green', 'red');
sort($colors);                   
echo "<ul>";                     
foreach ($colors as $color) {     
    echo "<li>$color</li>";      
}
echo "</ul>";

echo "<h3>Q2</h3>";

$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",
"Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava",
"Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin",
"Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" );

asort($cities);  
//هاي الداله ترتب حسب القيمه 

foreach ($cities as $country => $capital) { 
    // $country = المفتاح ، $capital = القيمة
    echo "The capital of $country is $capital<br>";
}

echo "<h3>Q3</h3>";
$color = array (4 => 'white', 6 => 'green', 11=> 'red');
echo reset($color);   // reset() بترجع أول عنصر بغض النظر عن رقم المفتاح (هون المفتاح 4 مش 0)
echo "<br>";

echo "<h3>Q4</h3>";
function insertItem($arr, $location, $newItem) {
    
    array_splice($arr, $location - 1, 0, $newItem);
    return $arr;
}
$arr = array(1, 2, 3, 4, 5);
$result = insertItem($arr, 4, '$');
echo implode(' ', $result);   // implode بتجمع عناصر المصفوفة في نص وبينها مسافة
echo "<br>";

echo "<h3>Q5</h3>";
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
asort($fruits);
foreach ($fruits as $key => $value) {
    echo "$key = $value<br>";
}
echo "<h3>Q6</h3>";
$temps = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
$average = array_sum($temps) / count($temps);   // المجموع ÷ العدد
echo "Average Temperature is: " . round($average, 1) . "<br>";   // round(...,1) رقم عشري واحد
sort($temps);                                    // ترتيب تصاعدي
$lowest  = array_slice($temps, 0, 5);            // أول 5 عناصر = أقل 5
$highest = array_slice($temps, -5);              // آخر 5 عناصر = أعلى 5
echo "List of five lowest temperatures: " . implode(', ', $lowest) . "<br>";
echo "List of five highest temperatures: " . implode(', ', $highest) . "<br>";

echo "<h3>Q7</h3>";
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$merged = array_merge($array1, $array2);
echo "<pre>";
print_r($merged);   // print_r بتطبع المصفوفة بشكل مقروء
echo "</pre>";    //<pre> بتحافظ على تنسيق النص


echo "<h3>Q8</h3>";
function toUpper($arr) {
    // array_map بتطبق دالة على كل عنصر. هون trim بتشيل المسافات الزايدة (" white")
    // و strtoupper بتحول الحروف لكبيرة
    return array_map(function ($item) {
        return strtoupper(trim($item));
    }, $arr);
}
$colors = array("red", "blue", " white", "yellow");
echo "<pre>";
print_r(toUpper($colors));
echo "</pre>";
 