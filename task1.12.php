<?php //12. Определить, является ли заданное целое число N простым.

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