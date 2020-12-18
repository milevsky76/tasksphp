<?php //4. Найти все четные четырехзначные числа, цифры которых следуют в порядке возрастания или убывания.

function getEvenFourDigitAscDescValues(): array
{
    $evenFourDigitAscDecValues = [];

        if(isEven($i)) {
            if(isDecreasingSequence($i)) {
                $evenFourDigitAscDecValues[] = $i;
                continue;
            }else if(isAscendingSequence($i)) {
                $evenFourDigitAscDecValues[] = $i;
                continue;
            }
    for ($i = 1000; $i <= 9999 ; $i++) {
        }
    }
    
    return $evenFourDigitAscDecValues;
}

function isEven(int $number): bool
{
    return $number % 2 == 0 ? true : false;
}

function isDecreasingSequence(int $naturalNumber): bool
{
    $decreasingSequence = false;
    $countOfDigits = getCountsOfDigits($naturalNumber);

    if($naturalNumber > 0 && $countOfDigits > 1) {
        while ($countOfDigits != 1) {
            if($naturalNumber > 9) {
                $lastNumber = $naturalNumber % 10;
                $naturalNumber /= 10;
            }

            if($lastNumber < $naturalNumber % 10) {
                $decreasingSequence = true;
                $countOfDigits--;
            }else {
                return $decreasingSequence = false;
            }            
        }
    }

    return $decreasingSequence;
}

function isAscendingSequence(int $naturalNumber): bool
{
    $ascendingSequence = false;
    $countOfDigits = getCountsOfDigits($naturalNumber);

    if($naturalNumber > 0 && $countOfDigits > 1) {
        while ($countOfDigits != 1) {
            if($naturalNumber > 9) {
                $lastNumber = $naturalNumber % 10;
                $naturalNumber /= 10;
            }

            if($lastNumber > $naturalNumber % 10) {
                $ascendingSequence = true;
                $countOfDigits--;
            }else {
                return $ascendingSequence = false;
            }            
        }
    }

    return $ascendingSequence;
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