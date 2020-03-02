<?php
    $limit = 1000;

    $arr = sieveEratos($limit);

    echo '<br/> Вывод простых чисел до '.$limit. ', полученных с помощью решета Эратосфена : <br/> ';
    primeOutput($arr);
    echo "<br/> Вывод составных чисел до $limit: </br>";
    compositeOutput($arr);


    //Поиск простых чилел до limit с помощью решета Эратосфена.
    function sieveEratos($limit)
    {
        $arr = array_fill(2, $limit, 1);
        for($i = 2; $i <= $limit; $i++)
        {
            if($arr[$i] == 1)
            {
                for($j = $i * $i; $j <= $limit; $j += $i)
                {
                    $arr[$j] = 0;
                }
            }
        }

        return $arr;
    }
    //Вывод простых чисел из решета
    function primeOutput ($arr)
    {
        for($i = 2; $i <= count($arr); $i++)
            if($arr[$i] == 1) echo $i.' ';
        echo "<br/>";
    }
    //Вывод составных чисел из решета
    function compositeOutput($arr){
        for($i = 2; $i <= count($arr); $i++)
            if($arr[$i] == 0) echo $i.' ';
        echo "<br/>";
    }
?>