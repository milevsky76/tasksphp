<?php //13. Определить, является ли число  2n+m  симметричным, т. е. запись числа содержит четное количество цифр и совпадают его левая и правая половинки.

function isSymmetrical(int $n, int $m): bool
{
    $symmetrical = false;

    $number = 2 * $n + $m;
    
    $count = getCountsOfDigits($number);

    if($count % 2 == 0 && ((int)($number / pow(10, $count / 2)) == $number % pow(10, $count / 2))){
        $symmetrical = true;
    }
    
    return $symmetrical;
}

function getCountsOfDigits(int $number): int
{
    $count = ($number == 0) ? 1 : 0;

    while ($number != 0) {
        $count++;
        $number = (int)($number / 10);
    }

    return $count;
}

?>