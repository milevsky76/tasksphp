<?php //8. Получить все четырехзначные целые числа, в записи которых нет одинаковых цифр.

function getWithoutIdenticalDigits(): array
{
    $withoutIdenticalDigits = [];

    for ($i = 1000; $i <= 9999; $i++) { 
        if(isSameNumbers($i)){
            continue;
        }
        $withoutIdenticalDigits[] = $i;
    }

    return $withoutIdenticalDigits;
}

function isSameNumbers(int $naturalNumber): bool
{
    if ($naturalNumber > 9) {
        do {
            $lastNumber = $naturalNumber % 10;
            $residualNaturalNumber = $naturalNumber = (int)($naturalNumber / 10);
            do {
                if ($lastNumber == $residualNaturalNumber % 10) {
                    return true;
                }
                $residualNaturalNumber = (int)($residualNaturalNumber / 10);
            } while ($residualNaturalNumber != 0);
        } while ($naturalNumber != 0);
    }

    return false;
}

?>