<?php //3. Выяснить, образуют ли цифры данного натурального числа N возрастающую последовательность.

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