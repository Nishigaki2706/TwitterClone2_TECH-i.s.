<?php


// PHP8  while文について

//while文は繰り返し回数が決まっていない処理：for文は繰り返し回数が決まっている処理のときに使う。

$amount = 15000;
$year=0;

while($amount<=30000){
    $year++;
    $amount *=1.5;    /* 負の数字だと無限ループしてしまう */
    // $amount = $amount * 1.5;
}

echo $year.'年です。';  /* if文にそのまま使える。 */

if ($year<10) {
    echo "短いですね";
}elseif($year>20){
    echo "多いですね";
}else {
    echo "まぁ普通ですね。";
}
echo "<br>";
// PHP 8 4演習問題
$num=1000;

while(0 < $num){
    $num-= 100;   /* $numに-100されたものを代入しまた$num1に再代入するイメージ-=  */
    echo $num;
    echo "<br>";
}

// PHP 9 for文


for($num2=1;$num2<1000;$num2++){
    $num2+=1000;
}
echo $num2;
echo "<br>";

$amount=200;

for($year = 0;$year < 30; $year++){
    $amount *=1.05;
}

echo $amount;
echo "<br>";
if ($amount<5000) {
    echo "少なくないですか？";
}elseif ($amount<9000) {
    echo "まぁ普通かな";
}elseif ($amount<200000) {
    echo "めっちゃ多いですね！";
}else {
    echo "めっちゃ多いですね！うらやましいです!";
}
echo "<br>";

for($num3=1;$num3<101;$num3++){
    echo $num3;
    echo "<br>";
}

for($num4=1;$num4<=10;$num4++){
    for($num5=1;$num5<=10;$num5++){
        echo' '.$num4.'×'.$num5.'='.$num4*$num5.' ';
    }

    echo "<br>";
}

// PHP10 配列

$baseball=array('北海道','Fighters','今は最下位','Fight!!');
echo $baseball[0];
echo $baseball[1];
echo "<br>";
$veg=array('ブロッコリー','人参','  枝豆','パプリカ','ほうれん草');
print_r($veg);
echo "<br>";
for($veg1=0;$veg1< count($veg);$veg1++){  /* count()は要素の数を返す。 */
    echo $veg[$veg1]."<br>";
}

$fruit=array(
    "Apple"=>"リンゴ",
    "banana"=>"バナナ",
    "orange"=>"オレンジ"
);
print_r($fruit);
echo "<br>";
echo $fruit["Apple"]."<br>";
echo $fruit["banana"]."<br>";
echo $fruit["orange"]."<br>";


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TECH I.S.</title>
</head>
<body>
    <p>hello tech i.s.</P>
</body>
</html>