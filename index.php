<?php

$arr = ['how', 'are', 'you', 'hello'];

function mySort($arr)
{
    for($j = 1; $j < count($arr); $j++){

        $key = $arr[$j];

        $i = $j - 1;

        while ($i > -1 && !moreThan($arr[$i], $key)){

            $arr[$i + 1] = $arr[$i];

            $i--;
        }

        $arr[$i + 1] = $key;
    }
    return $arr;
}


/**
 * @param $a
 * @param $b
 * @return bool
 * Определяет, является ли элемент а больше б (см задание)
 * Если передать две одинаковые последовательности, тогда вернет false
 */
function moreThan($a, $b){

    if(!is_string($a) || !is_string($b)){
        return false;
    }

    if(myStrCount($a) > myStrCount($b)){
        return true;
    }elseif (myStrCount($a) < myStrCount($b)){
        return false;
    }

    // Случай, если равны
    $len = myStrCount($a) - 1;

    while ($len > 0){

        if($a[$len] === $b[$len]){
            continue;
        }else{
            return $a[$len] < $b[$len];
        }

        $len--;
    }

    return false;
}


function myStrCount($a){

    if(!is_string($a)){
        return 0;
    }

    $i = 0;

    while(isset($a[$i])){
        $i++;
    }

    return $i;
}

echo '<pre>';
print_r(mySort($arr));
echo '</pre>';
