<?php //4. По заданному натуральному числу N получить число M, записанное цифрами исходного числа, взятыми в обратном порядке.

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