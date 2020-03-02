<?php
$transactions = [
    [35, 22, -43, 12],
    [10, -5, 3],
    [72, 33, -12, 13, -18, 99],
    [20, -12]
];

$sortedSums = CalculateTransactions($transactions);
PrintArray($sortedSums);


function CalculateTransactions($arr){
    $ans = [];
    foreach($arr as $person){
        $sum = 0;
        foreach($person as $value){
            $sum += $value;
        }
        $ans[] = $sum;
    }
    rsort($ans);
    return $ans;
}

function PrintArray(array $arr){
    foreach($arr as $key => $value){
        echo $value.' ';
    }
    echo '</br>';
}
?>