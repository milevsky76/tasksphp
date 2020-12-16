<?php //2. Получить  все  четырехзначные  числа,  сумма  цифр  которых  равна заданному числу  n.

function getValues(int $number): array
{
    $values = [];

    if($number >= getSumOfNumber(1000) && $number <= getSumOfNumber(9999)) {
        for ($i = 1000; $i <= 9999 ; $i++) {
            $sumOfNumber = getSumOfNumber($i);
            
            if($sumOfNumber === $number) {
                $values[] = $i;
            }
        }
        
        return $values;
    }
    
    return $values;
}

function getSumOfNumber(int $number): int
{
    $sumOfNumber = 0;

    do {
        $sumOfNumber += $number % 10;
        $number = (int)($number / 10);
    } while ($number != 0);

    return $sumOfNumber;
}

?>