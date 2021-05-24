<?php

echo "Hello TECH I.S.";

$baseball='figthers';
echo $baseball;

/* 定数はdefine()で定義する、変数と違い上書きできない＄は必要ない */

$num1='6';
$num2='15';
    echo "中田の背番号は${num1}です。上沢の背番号は${num2}です。";

echo 11+88;
echo'<br>';
echo 33/3;
// ++はインクリメント、＋１をする　　　--はデクリメント、ー１をする

// PHP 4演習問題１
echo 4+1;
echo '<br>';
echo 4-1;
echo '<br>';
echo 20*20;
echo '<br>';
echo 20/20;
echo '<br>';
echo 3+7+(50*50);
echo '<br>';

// PHP5 文字列

$string='Hello';
$string2='TUさん';
$stirng3='How are you today?';
// .(コンマ)で＄～をつなぐことができる。
echo $string.$string2.$stirng3; 
echo '<br>';
// 演習問題
$prefecture='愛媛県';
echo $prefecture;
echo '<br>';

// PHP6 if文
$fighters=10;
$lions=0;

if($fighters>$lions){
        echo "fightersの勝!!";
    }elseif($fighters<$lions){
        echo "lionsの勝";
    }else{
        echo "引き分け";
}
echo "<br>";

$line='30';
$score='100';
 
if($line>=$score){          /* >=で未満 */
        echo "赤点";
    }elseif($score == 100){
        echo "満点です！";
    }else {
        echo"合格です。";
    }

echo "<br>";
// PHP7 switch文

$prefecture2="石川県";
switch($prefecture2){
    case '東京都';
        echo 'ここは関東です。';
    break;
    
    case '沖縄県';
        echo 'ここは九州です。';
    break;

    case '愛知県';
        echo'ここは中部です。';
    break;

    case '愛媛県';
        echo 'ここは四国です。';
    break;

    case '広島県';
        echo 'ここは中国です。';
    break;

    case '石川県';
       echo $prefecture2.'は中部です。';
    break;
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hello tech i.s.</title>
</head>
<body>
     <?="こんにちは　tech i.s."; ?> 
</body>
</html>