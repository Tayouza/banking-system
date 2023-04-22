<?php

namespace App\Helpers;

class Cpf
{
    /**
     * @param string $cpf
     */
    public static function validate($cpf)
    {

        // Extract only numbers
        $cpf = NumberHelper::clean($cpf);

        // Checks if all digits were entered correctly
        if (strlen($cpf) != 11) {
            return false;
        }

        // Checks whether a sequence of repeated digits has been entered.  Ex: 111.111.111-11
        if (preg_match('/(\d)\1{10}/', $cpf)) {
            return false;
        }

        // Does the calculation to validate the CPF
        for ($t = 9; $t < 11; $t++) {
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf[$c] * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf[$c] != $d) {
                return false;
            }
        }
        return true;
    }

    /**
     * @param $value
     * 
     * @return string
     */
    public static function mask($value) : string
    {
        return NumberHelper::mask($value, '###.###.###-##');
    }
}
