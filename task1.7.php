<?php //7. Выяснить, есть ли в записи натурального числа N две одинаковые цифры.

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