<!doctype html>
<html lang="jp">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Hello, world!</title>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  </head>
  <body>
    <h1><?php echo "改行コードnは反映されないようです\n" ?></h1>
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
    <br>
    <!-- クリックするごとに文字が増えるbuttonを設置 -->
    <button type="button" class="btn btn-primary js-button">0</button>
    <script type="text/javascript">
      $(function(){
        $(".js-button").on("click",function(){
          let num = Number($(this).text()) + 1;
          $(this).text(num);
        })
      });
    </script>
  </body>
</html>