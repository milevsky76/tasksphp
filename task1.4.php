<?php //4. Найти все четные четырехзначные числа, цифры которых следуют в порядке возрастания или убывания.

function isEven(int $number): bool
{
    return $number % 2 == 0 ? true : false;
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