<?php
// 配列かどうか判定する組み込み関数を使用し、配列の場合は OK、配列でない場合は NG と表示する処理を作成してください。
// null の場合の対策も行ってください。
function limite($time){
    return $time * 60;
};

if(is_array($time)){
    echo 'OK' ;
}else {
    echo 'NG' ;
}

//nullの場合
if(is_null($time)){
    echo 'true';
}else{
    echo 'false';
}

?>