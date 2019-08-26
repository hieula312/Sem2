<?php

// Mở composer.json
// Thêm vào trong "autoload" chuỗi sau
// "files": [
//         "app/function/function.php"
// ]

// Chạy cmd : composer  dumpautoload

function changeTitle($str,$strSymbol='-',$case=MB_CASE_LOWER){// MB_CASE_UPPER / MB_CASE_TITLE / MB_CASE_LOWER
    $str=trim($str);
    if ($str=="") return "";
    $str =str_replace('"','',$str);
    $str =str_replace("'",'',$str);
    $str = mb_convert_case($str,$case,'utf-8');
    $str = preg_replace('/[\W|_]+/',$strSymbol,$str);
    return $str;
}

function trimStr($str){
    $a = explode(' ',$str);
    $output = "";
    $num = count($a);
    foreach($a as $item){
        if($num == 1){
            $output .= substr($item,0,2);
        }else{
            $output .= substr($item,0,1);
        }
    }
    return $output;
}

function getName($str){
    $a = explode(' ',$str);
    $name = array_pop($a);
    return $name;

}

function getRandomStringNumber($num){
    $ran='';
    $count=0;
    while ($count < $num) {
        $random_digit = mt_rand(0, 9);
        $ran .= $random_digit;
        $count++;
    }
    return $ran;
}


?>