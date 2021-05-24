<?php
// PHP12 foreach文

$price=array(100,200,300,456);

foreach($price as $value){
    echo $value.'円の税込は...';
    $result=$value*1.1;
    echo $result.'円ですね。'.'<br>';
}

// 連想配列のforeach文

$array=array(
    'name'=>'北',
    'adress'=>'北海道',
    'age'=>'21'
);

foreach($array as $key => $info){
    echo $key.':';
    echo $info.'<br>';
}


$fruit=array(
    "Apple"=>"リンゴ",
    "banana"=>"バナナ",
    "orange"=>"オレンジ"
);

foreach($fruit as $eng => $jap){
    echo $eng;
    echo $jap."<br>";
    
}

// PHP13 二次元配列


$array3 = array(
    array('名前' => '狩山', '住所' => '愛媛', '年齢' => '20才'),  // 0番目の配列
    array('名前' => '永井', '住所' => '香川', '年齢' => '30才'),  // 1番目の配列
    array('名前' => '森', '住所' => '広島', '年齢' => '26才'),    // 2番目の配列
    array('名前' => '櫻井', '住所' => '愛媛', '年齢' => '35才')   // 3番目の配列
      );
  print_r($array3);
  echo "<br>";

//   PHP14 関数


function hello(){
    return "hello TECH I.S.";
}

echo hello();

echo "<br>";


function Zeikomi($syoukei , $zeiritu = "1.1"){
    return $syoukei * $zeiritu;
}
$syoukei = 2000;
//引数を指定しないとデフォルト(消費税10%)
echo Zeikomi($syoukei); //2000

echo "<br>";

// function shopmenu($a='menu1',$b='drink',$c='sidemenu'){
    // echo $a."<br>";
    // echo $b."<br>";
    // echo $c."<br>";

  
// }

// echo shoupmenu('カレー','プロテイン','ブロッコリー');


// PHP 15 スーパーグローバル変数

// スーパーグローバル変数は関数の中で定義したのものでも関数の外で呼び出すことができる。


// GETはアドレスバーのURLに表示される
// POSTは公開してはいけないものを送る

print_r($_SERVER);




?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP カリキュラム</title>
</head>
<body>
    
</body>
</html>