<?php
echo "<pre>";
  $greeting = "こんばんは";
  echo $greeting;

  $price = 1000;
  echo $price;

  $a = "こんにちは";
  var_dump($a);

/* 変数に使える文字 ： 半角英数 _アンダーバー
   先頭に数字は使えない
   echoしたもののみ反映される
  名前はルールを決めてつける（統一性を持たせる）
  文字列は必ず" "か' 'で囲む
  var_dump()はデバック用関数、プログラミング中にバグを生まない、ロジックを間違えない、
  コードを把握するために使う
  */

  var_dump($greeting); //null(未定義)
  var_dump(true);      //論理値 真か偽
  var_dump( 1 > 2 );   //
  var_dump( $greeting == "おはよう" );
 