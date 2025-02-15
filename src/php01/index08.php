<?php
//array関数
$people = array('Taro', 'Jiro', 'Saburo');

var_dump($people);

echo $people[0];

//連想配列その１
$people = array(
  'person1' => 'Taro',
  'person2'  => 'Jiro',
  'person3'  => 'Saburo'
);

var_dump($people);

//連想配列その２
$people = [
  'person1' => 'taro',
  'person2' => 'jiro',
];

echo $people['person1'];

//多次元配列
$people = [
  [
    "last_name" => "山田",
    "first_name" => "太郎",
    "age" => 29,
    "gender" => "男性"
  ],
  [
    "last_name" => "鈴木",
    "first_name" => "次郎",
    "age" => 25,
    "gender" => "男性"
  ],
  [
    "last_name" => "佐藤",
    "first_name" => "花子",
    "age" => 20,
    "gender" => "女性"
  ]
];

echo $people[0]["last_name"];

//forreach文
$people = array('Taro', 'Jiro', 'Saburo');

foreach ($people as $person) {
  echo $person;
  echo '<br />';
}

//forreachによる添字と値の取得
$people = array(
  'person1' => 'Taro',
  'person2'  => 'Jiro',
  'person3'  => 'Saburo'
);

foreach ($people as $person => $name) {
  print $person . "は" . $name . "です" . '<br />';
}

//問題
$array = [
    ['Taro',25,'men'],
    ['Jiro',20,'men'],
    ['hanako',16,'women']
];

foreach($array as $person) {
    echo $person[0] . '(' . $person[1] . '歳' . $person[2] . ')';
    echo '<br>';
}

//連想配列の場合の取り出し方
$array = [
    '赤'=>['リンゴ','イチゴ','トマト'],
    '緑'=>['メロン','キュウリ','ピーマン'],
    '黄'=>['バナナ','パイナップル','レモン']
];

foreach($array as $key=>$vals){
    echo $key.'色の食べ物は'.$vals[0].','.$vals[1].','.$vals[2];
    echo '<br>';
