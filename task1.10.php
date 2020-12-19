<?php //10. Найти все меньшие N числа-палиндромы, которые при возведении в квадрат дают палиндром. Число называется палиндромом, если его запись читается одинаково с начала и с конца.

function getNumberReverse(int $naturalNumber): int
{
    $numberReverse = 0;

    if($naturalNumber > 0) {
        $countsOfDigits = getCount($naturalNumber);    

        while ($countsOfDigits != 0) {
            if($naturalNumber > 9) {
                $lastNumber = $naturalNumber % 10;
                $naturalNumber = (int)($naturalNumber / 10);
                $numberReverse += $lastNumber * pow(10, --$countsOfDigits);
            }else {
                $numberReverse += $naturalNumber;
                break;
            }
        }
    }

    return $numberReverse;
}

function getCount(int $number): int
{
    $count = ($number == 0) ? 1 : 0;

    while ($number != 0) {
        $count++;
        $number = (int)($number / 10);
    }

    return $count;
}

?>