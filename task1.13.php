<?php //13. Определить, является ли число  2n+m  симметричным, т. е. запись числа содержит четное количество цифр и совпадают его левая и правая половинки.

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