<?php //14. Парными  простыми числами называются два простых числа, разность  которых равна двум. Например,  3 и 5; 11 и 13. Найти 10  парных  простых чисел.

function getPrimeNumbers(int $numberOfPairs = 10): array
{
    $num1 = $num2 = 1;
    $primeNumbers = [];

    do {
        if (isPrimeNumber($num2)) {
            if ($num2 - $num1 == 2) {
                $primeNumbers[] = [$num1, $num2];
            }

            $num1 = $num2;
        }

        $num2++;
    } while (count($primeNumbers) != $numberOfPairs);

    return $primeNumbers;
}

function isPrimeNumber(int $n): bool
{
    $primeNumber = false;

    if($n > 1) {
        $primeNumber = true;
        $divisors = 0;

        for ($i = 1; $i <= $n; $i++) {
            if(($n % $i) == 0){
                $divisors++;
            }
    
            if ($divisors > 2) {
                $primeNumber = false;
                break;
            }
        }
    }
    
    return $primeNumber;
}

?>