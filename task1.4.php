<?php //4. Найти все четные четырехзначные числа, цифры которых следуют в порядке возрастания или убывания.

function isEven(int $number): bool
{
    return $number % 2 == 0 ? true : false;
}

?>