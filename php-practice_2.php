<?php
// Q1 tic-tac問題

for ($i = 1; $i <= 100; $i++) {
  if ($i % 4 === 0 && $i % 5 === 0) {
      echo 'tic-tac',"\n";
  }elseif ($i % 4 === 0) {
      echo 'tic', "\n";
  }elseif ($i % 5 === 0) {
      echo 'tac', "\n";
  }else {
      echo  $i, "\n";
  }
}

// Q2 多次元連想配列
問題１
$personalInfos = [
  [
      'name' => 'Aさん',
      'mail' => 'aaa@mail.com',
      'tel'  => '09011112222'
  ],
  [
      'name' => 'Bさん',
      'mail' => 'bbb@mail.com',
      'tel'  => '08033334444'
  ],
  [
      'name' => 'Cさん',
      'mail' => 'ccc@mail.com',
      'tel'  => '09055556666'
  ],
];

echo $personalInfos[1]['name'].'の電話番号は'.$personalInfos[1]['tel'].'です。';

問題２

foreach ($personalInfos as $keys => $values){
  $keys = $keys + 1;
  echo  $keys.'番目の'.$values['name'].'のメールアドレスは'.$values['mail'].'で、電話番号は'.$values['tel'].'です。',"\n";
}

問題３

$ageList = [25, 30, 18];
foreach ($personalInfos as $keys => $values) {
    $values['age'] = $ageList[$keys];
    $personalInfos =& $values;
    var_dump($personalInfos);
}

// Q3 オブジェクト-1
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
        echo '学籍番号'.$this->studentId.'番の生徒は'.$this->studentName.'です。';
    }

    public function attend()
    {
        echo '授業に出席しました。';
    }
}

$student = new Student(129,'山田');

// Q4 オブジェクト-2
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
        echo '学籍番号'.$this->studentId.'番の生徒は'.$this->studentName.'です。';
    }

    public function attend($subject)
    {
        $this->studentSubject = $subject;
        echo $this->studentName.'は'.$this->studentSubject.'の授業に参加しました。学籍番号:'.$this->studentId;
    }
}

$yamada = new Student(120, '山田');
$yamada->attend('PHP');

// Q5 定義済みクラス
問題１
$date = new DateTime();
echo $date->modify('-1 months')->format('Y-m-d');

問題２
$dateOld = new DateTime('1992-04-25');
$dateToday = new DateTime();
$diff = $dateOld->diff($dateToday);
echo 'あの日から'.$diff->format('%a日').'経過しました。';
?>

?>