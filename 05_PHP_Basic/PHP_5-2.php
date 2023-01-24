<?php
// 変数が空かどうか判定する組み込み変数を使用して、空の場合 OK、空でない場合は NG と表示する処理を作成してください。
// 空の場合、空でない場合という文字列も併せて出力してください。
function limite($time){
    return $time * 60;
}
if (empty($time)) {
    echo '空の場合　OK';
}else {
    echo '空でない場合　NG';
}
?>