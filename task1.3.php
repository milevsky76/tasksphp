<?php //3. Выяснить, образуют ли цифры данного натурального числа N возрастающую последовательность.

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