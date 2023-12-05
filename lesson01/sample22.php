<?php
    $age ="１";
    $age = mb_convert_kana($age,'n','UTF-8');

    if(is_numeric($age)) {
        echo $age . "歳です";
    } else {
        echo "指定された方法で入力してください (" .$age .")" ;
    }
?>
