<?php //6. Получить  все  четырехзначные  числа,  в  записи  которых  встречаются только цифры 0,2,3,7.

function getSpecificNumbers(): array
{
    $specificNumbers = [];

    for ($i = 1000; $i <= 9999 ; $i++) {
        if(isSpecific($i)) {
            $specificNumbers[] = $i;
        }
    }
    
    return $specificNumbers;
}

function isSpecific(int $number): bool
{

    while ($number != 0) {
        $lastNumber = $number % 10;
        $number = (int)($number / 10);
        
        if ($lastNumber != 0 && $lastNumber != 2 && $lastNumber != 3 && $lastNumber != 7) {
            return false;
        }
    }

    return true;
}

?>