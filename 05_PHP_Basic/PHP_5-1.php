<?php
//  クラスの中に、価格を渡したら税込価格を返す関数を作成し、実行してください。(税 10%)
//  引数が数値でない場合、引数無しで呼び出した場合それぞれでエラーメッセージを表示してください。
 class zeikomi
 {
   function zeikomi($price){
   $tax = $price * 1.10;
 
   return '税込価格';
   }
 }
 echo zeikomi();
 //Fatal error: Uncaught ArgumentCountError: Too few arguments to function zeikomi(), 0 passed in /Users/kakimaruyuuto/Curriculum/y_kakimaru/05_PHP_Basic/PHP_5-1.php on line 9 and exactly 1 expected in /Users/kakimaruyuuto/Curriculum/y_kakimaru/05_PHP_Basic/PHP_5-1.php:4 Stack trace: #0 /Users/kakimaruyuuto/Curriculum/y_kakimaru/05_PHP_Basic/PHP_5-1.php(9): zeikomi() #1 {main} thrown in /Users/kakimaruyuuto/Curriculum/y_kakimaru/05_PHP_Basic/PHP_5-1.php on line 4
 
?>

<?php
class zeikomi
{
   function zeikomi(){
   $tax = $price * 1.10;
   return '税込価格';
  }
}
echo zeikomi();
//Warning: Undefined variable $price in /Users/kakimaruyuuto/Curriculum/y_kakimaru/05_PHP_Basic/PHP_5-1.php on line 5
税込価格
?>