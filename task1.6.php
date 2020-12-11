<?php //6. Получить  все  четырехзначные  числа,  в  записи  которых  встречаются только цифры 0,2,3,7.

function getSpecificFourDigitNumbers(array $specificNumbers = null): array
{
    $specificNumbers = $specificNumbers ?: [0, 2, 3, 7];
    $specificFourDigitNumbers = [];
    define("LIMIT_FROM", 1000, false);
    define("LIMIT_TO", 9999, false);

    for ($i = LIMIT_FROM; $i <= LIMIT_TO ; $i++) {
        if(isSpecific($i, $specificNumbers)) {
            $specificFourDigitNumbers[] = $i;
        }
    }
    
    return $specificFourDigitNumbers;
}

function isSpecific(int $number, array $specificNumbers): bool
{
    for ($j = 0; $j < 4; $j++) { 
        $lastNumber = $number % 10;
        $number = (int)($number / 10);
        
        if (!isInArray($lastNumber, $specificNumbers)) {
            return false;
        }
    }

    return true;
}

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