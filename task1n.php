<?php

echo "Задание 5b: </br>";
$password =[3,0,2,3,9,0];
$arr = BruteDecode($password);
PrintArray($arr);

echo "</br>Задание 5c:</br>";
$pass1 = ['4','3','6'];
$pass2Se = ['2','3','4'];
Task5cDecode($pass1, $pass2Se);

function BruteDecode(array $pass, array &$try = [],$i = 0){
    $try[] = 0;
    $k = 0;
    while($try[$i] != $pass[$i]){
        $try[$i] = ++$k;
    }
    if ($i < count($pass)-1){
        $try = BruteDecode($pass, $try, ++$i);
    }else {
        return $try;
    }
    return $try;
}

function PrintArray(array $arr){
    foreach($arr as $key => $value){
        echo $value;
    }
    echo '</br>';
}

function Task5cDecode($pass1, $pass2Se){
    if($pass1 [1] > 5){
        $pass2[] = $pass2Se[2];
        $pass2[] = $pass2Se[1];
        $pass2[] = $pass2Se[0];
        PrintArray($pass2);
        echo "</br> Число сформировано: \"цифра первого разряда из \$pass2Se\" . \"цифра второго разряда из \$pass2Se\" . \"цифра третьего разряда из \$pass2Se\"";
    }else{
        $pass2[] = $pass2Se[1];
        $pass2[] = $pass2Se[0];
        $pass2[] = $pass2Se[2];
        PrintArray($pass2);
        echo "</br> Число сформировано: \"цифра второго разряда из \$pass2Se\" . \"цифра третьего разряда из \$pass2Se\" . \"цифра первого разряда из \$pass2Se\"";
    }
}
?>