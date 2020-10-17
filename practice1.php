<?php
$name = YutaAraki;
if ($name == Araki){
    echo "あなたの名前です";
} else{
    echo "あなたの名前ではありません";
}
?>

<?php 
for ($i = 1; $i < 10001; $i++){
    echo $i;
}
?>

<?php
$fruits = array("apple","banana","peach","grape","strawberry");{
    foreach ($fruits as $fruit){
        echo $fruit;
        echo"\n";
    }
}
?>

<?php
$start = 1;
$end = 100;
for($i = $start; $i < $end; $i++){
    if($i % 5 == 0){
        echo $i;
        echo "\n";
    }
}