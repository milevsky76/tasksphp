<?php //6. Получить  все  четырехзначные  числа,  в  записи  которых  встречаются только цифры 0,2,3,7.

function isInArray(int $number, array $array): bool
{
    $numberInArray = false;

    for ($i = 0; $i < count($array); $i++) {
        if($number == $array[$i]) {
            return $numberInArray = true;
        }
    }

    return $numberInArray;
}

?>