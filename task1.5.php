<?php //4. По заданному натуральному числу N получить число M, записанное цифрами исходного числа, взятыми в обратном порядке.

function getNumberReverseOrder(int $naturalNumber): int
{
    $numberReverseOrder = 0;

    if($naturalNumber > 0) {
        $countsOfDigits = getCountsOfDigits($naturalNumber);    

        while ($countsOfDigits != 0) {
            if($naturalNumber > 9) {
                $lastNumber = $naturalNumber % 10;
                $naturalNumber = (int)($naturalNumber / 10);
                $numberReverseOrder += $lastNumber * pow(10, --$countsOfDigits);
            }else {
                $numberReverseOrder += $naturalNumber;
                break;
            }
        }
    }

    return $numberReverseOrder;
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