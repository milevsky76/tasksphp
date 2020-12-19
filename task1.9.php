<?php //9. Дано  натуральное  число  N.  Определить,  является  ли  оно  автоморфным. Автоморфное число  равно последним разрядам квадрата этого числа. Например,  5 и 25,  6 и 36,  25 и 625.

function isAutomorphic(int $naturalNumber): bool
{
    $automorphic = false;

    if ($naturalNumber > 0) {
        $squareNumber = $naturalNumber * $naturalNumber;

        do {
            $lastNumberN = $naturalNumber % 10;
            $naturalNumber = (int)($naturalNumber / 10);

            $lastNumberS = $squareNumber % 10;
            $squareNumber = (int)($squareNumber / 10);

            if ($lastNumberN == $lastNumberS) {
                $automorphic = true;
                
            } else {
                return $automorphic = false;
            }
        } while ($naturalNumber != 0);
    }
    
    return $automorphic;
}

?>