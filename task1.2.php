<?php //2. Получить  все  четырехзначные  числа,  сумма  цифр  которых  равна заданному числу  n.

function getFourDigitValues(int $number): array
{
    $fourDigitNumbers = [];

    if($number >= getSumOfNumber(1000) && $number <= getSumOfNumber(9999)) {
        for ($i = 1000; $i <= 9999 ; $i++) {
            $sumOfNumber = getSumOfNumber($i);
            
            if($sumOfNumber === $number) {
                $fourDigitNumbers[] = $i;
            }
        }
        
        return $fourDigitNumbers;
    }
    
    return $fourDigitNumbers;
}

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