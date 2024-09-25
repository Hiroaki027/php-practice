<?php
// Q1 変数と文字列
$name = '「馬場」';

echo '私の名前は'.$name.'です。';

// Q2 四則演算
$num = 5 * 4;

echo $num;
echo "\n";
echo $num / 2;

// Q3 日付操作
echo '現在の時刻は、'.date("Y年m月d日 H時i分s秒").'です。'

// Q4 条件分岐-1 if文
$device = 'google';

if ($device == 'windows' || $device == 'mac') {
    echo '使用OSは、'."$device".'です。';
} else {
    echo 'どちらでもありません。';
}

// Q5 条件分岐-2 三項演算子
$age = 5;

if ($age >= 18) {
    $message = '成人です。';
} else {
    $message = '未成年です。';
}

echo  $message;

// Q6 配列
$prefactures = ['東京都','神奈川県','埼玉県','栃木県','千葉県','茨城県','群馬県'];

echo $prefactures[3].'と'.$prefactures[4].'は関東地方の都道府県です';

// Q7 連想配列-1
$prefactures = ['東京都' => '新宿区','神奈川県' => '横浜市','千葉県' => '千葉市','埼玉県' => 'さいたま市','栃木県' => '宇都宮市','群馬県' => '前橋氏','茨城県' => '水戸市'];

foreach ($prefactures as $y) {
    echo $y,"\n";
}
// Q8 連想配列-2
$prefactures = ['東京都' => '新宿区','神奈川県' => '横浜市','千葉県' => '千葉市','埼玉県' => 'さいたま市','栃木県' => '宇都宮市','群馬県' => '前橋氏','茨城県' => '水戸市'];

foreach ($prefactures as $x => $y) {
    if ($x =='埼玉県') {
        echo $x.'の県庁所在地は、'.$y.'です。';
    }
}
// Q9 連想配列-3
$prefactures = ['東京都' => '新宿区','神奈川県' => '横浜市','千葉県' => '千葉市','埼玉県' => 'さいたま市','栃木県' => '宇都宮市','群馬県' => '前橋氏','茨城県' => '水戸市','大阪府','愛知県'];

foreach ($prefactures as $x => $y) {
    if ($y == '大阪府' || $y == '愛知県') {
        echo $y.'は関東地方ではありません。',"\n";
    }else {
        echo $x.'の県庁所在地は、'.$y.'です。',"\n";
    }
}

// Q10 関数-1
function hello($name){
  echo $name.'さん、こんにちは。',"\n";
}
hello('馬場');
hello('藤縄');

// Q11 関数-2
function calcTaxInPrice($price = 1000){

  $taxInPrice = $price * 1.1;
  return $price.'円の商品の税込み価格は'.$taxInPrice.'円です。';
}

$message = calcTaxInPrice();

// Q12 関数とif文
function distinguishNum($num){
    
  $number = $num % 2;
  if ($number == 0) {
      return $num.'は偶数です。';
  }elseif ($number !== 0) {
      return $num.'は奇数です。';
  }
}

$message = distinguishNum(14);
echo $message,"\n";

$message = distinguishNum(35);
echo $message;

// Q13 関数とswitch文
function evaluateGreade($grade){
  switch ($grade) {
      case $grade == 'A' || $grade == 'B':
          return '合格です。';
          break;
      
      case $grade == 'C':
          return '合格ですが、追加課題があります。';
          break;
      
      case $grade == 'D':
          return '不合格です。';
          break;
          
      default:
          return '判定不明です。講師に問い合わせてください。';
          break;
  }
}

$message = evaluateGreade('A');
echo $message,"\n";

$message = evaluateGreade('D');
echo $message;

?>