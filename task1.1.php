<?php //1. Определить  количество  цифр,  меньших  5,  используемых  при  записи натурального числа N.

function getNumberOfDigits(int $naturalNumber): int
{
    $numberOfDigits = 0;
    
    if($naturalNumber > 0) {
       if($naturalNumber < 10) {
            if($naturalNumber < 5) {
                return $numberOfDigits = 1;
            }else {
                return $numberOfDigits;
            }
        }else {
            return (int)(($naturalNumber % 10) < 5) + getNumberOfDigits($naturalNumber / 10);
        } 
    }
    
    return $numberOfDigits;
}

?>