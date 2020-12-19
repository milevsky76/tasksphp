<?php //11. Напечатать те элементы последовательности натуральных чисел n0 ,n1,...,nm , которые делятся на сумму своих цифр.

function getDividedSum(int $n, int $m): array
{
    $dividedSum = [];

    if (($n > 0 && $m > 0) && $n < $m) {
        for ($i = $n; $i <= $m; $i++) {
            if($i % getSumOfNumber($i) == 0){
                $dividedSum[] = $i;
            }
        }
    }    
    
    return $dividedSum;
}

function getSumOfNumber(int $number): int
{
    $sumOfNumber = 0;

    do {
        $sumOfNumber += $number % 10;
        $number = (int)($number / 10);
    } while ($number != 0);

    return $sumOfNumber;
}

?>