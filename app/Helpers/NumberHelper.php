<?php

namespace App\Helpers;

class NumberHelper
{
    /**
     * @param $value
     * 
     * @return string
     */
    public static function clean($value) : string
    {
        return preg_replace('/[^0-9]/is', '', $value);
    }
    
    /**
     * @param $value
     * @param $mask
     * 
     * @return string
     */
    public static function mask($value, $mask)
    {
        $value = self::clean($value);
        $maskared = '';
        $item = 0;
        for ($i = 0; $i <= strlen($mask) - 1; $i++) {
            if ($mask[$i] == '#') {
                if (isset($value[$item])) $maskared .= $value[$item++];
            } else {
                if (isset($mask[$i])) $maskared .= $mask[$i];
            }
        }
        return $maskared;
    }
}