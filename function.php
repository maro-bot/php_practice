<?php
//1
function product($num){
    return $num * 2;
}
echo product(4);
echo "\n";
    
//2
function f($a,$b){
    return $a + $b;
}
echo f(3,10);
echo "\n";
    
//3
function arr_product($arr){
    $result = 1;
    foreach($arr as $val){
        $result *= $val;
    }
    return $result;
}

$x = array(1,3,5,7,9);
echo arr_product($x);
echo "\n";

//4
function max_array($arr) {
 $max_number = $arr[0];
 foreach($arr as $a) {
     $result = $a;
 }
    return $result;
}
$arr = array(1,3,5,7,9);
echo max_array($arr);
echo "\n";

//5
//strip_tags
$test = "<p>私の名前は荒木勇太です</p>";
echo strip_tags($test);
echo "\n";

//array_push
$a = array("orange", "banana");
array_push($a, "apple", "raspberry");
print_r($a);

//array_merge
$a = ["a","b"];
$b = ["c","d"];
$result = array_merge($a,$b);
print_r($result);
    
//time
$nowtime = time();
echo $nowtime;
echo"\n";

//mktime
$time = mktime(2,0,0,10,22,2020);
echo $time;
echo "\n";

//date
$date = time();
echo  date("Y/m/d");


?>