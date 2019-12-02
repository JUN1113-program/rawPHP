<?php
  echo "改行コードnは反映されないようです\n";
?>
<br>
<?php
  echo "足し算も出力されます";
  echo 1+1;
?>
<br>
<?php
// class Teaを宣言、お茶の名前を持つ
  class Tea{
    public $name;
    public function __construct($name){
      $this->name = $name;
    }
  }

// teaNamesを定義する
  $TeaNames = array("綾鷹","生茶","紅茶");

// 定義したTeaNamesの各要素に対してインスタンスを生成し、名前を出力
  foreach($TeaNames as $tea){
    $tea = new Tea($tea);
    echo $tea->name;
  }

// 配列をそのまま出力する
  foreach($TeaNames as $tea){
    echo $tea;
  }
?>