<?php //2. Получить  все  четырехзначные  числа,  сумма  цифр  которых  равна заданному числу  n.

function getFourDigitValues(int $number): array
{
    $fourDigitNumbers = [];
    define("LIMIT_FROM", 1000, false);
    define("LIMIT_TO", 9999, false);

    if($number >= getSumOfNumber(LIMIT_FROM) && $number <= getSumOfNumber(LIMIT_TO)) {
        for ($i = LIMIT_FROM; $i <= LIMIT_TO ; $i++) {
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