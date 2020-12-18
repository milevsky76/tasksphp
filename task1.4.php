<?php //4. Найти все четные четырехзначные числа, цифры которых следуют в порядке возрастания или убывания.

function getEvenAscDescValues(): array
{
    $evenAscDecValues = [];

    for ($i = 1000; $i <= 9999 ; $i++) {
        if(isEven($i) && isAscDescSequence($i)) {
            $evenAscDecValues[] = $i;
        }
    }
    
    return $evenAscDecValues;
}

function isEven(int $number): bool
{
    return $number % 2 == 0 ? true : false;
}

function isAscDescSequence(int $naturalNumber): bool
{
    $sequence = false;
    $asc = false;
    $desc = false;

    if ($naturalNumber > 9) {
        do {
            $lastNumber = $naturalNumber % 10;
            $naturalNumber = (int)($naturalNumber / 10);

            if ($lastNumber == $naturalNumber % 10) {
                $sequence = false;
                break;
            }

            if ($lastNumber < $naturalNumber % 10) {
                $desc = true;
                $sequence = true;
            } else if ($lastNumber > $naturalNumber % 10) {
                $asc = true;
                $sequence = true;
            }

            if ($asc && $desc) {
                $sequence = false;
                break;
            }

            if ($naturalNumber <= 9) {
                break;
            }
        } while ($naturalNumber != 0);
    }

    return $sequence;
}

?>