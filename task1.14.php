<?php //14. Парными  простыми числами называются два простых числа, разность  которых равна двум. Например,  3 и 5; 11 и 13. Найти 10  парных  простых чисел.
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