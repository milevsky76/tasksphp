<?php //2. Получить  все  четырехзначные  числа,  сумма  цифр  которых  равна заданному числу  n.

function getSumOfNumber(int $number): int
{
    $sumOfNumber = 0;
    
    for ($i = 0; $i < 4; $i++) { 
        $sumOfNumber += $number % 10;
        $number = (int)($number / 10);
        
    }

    return $sumOfNumber;
}

?>