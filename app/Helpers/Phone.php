<?php

namespace App\Helpers;

class Phone
{
    public static function isValidNumber(string $number)
    {
        $number = preg_replace("/^\+?+62/", '',$number);
        
        if(preg_match('/^[0-9]+$/', $number)) {
            $number = static::sanitize($number);
            return (strlen($number) > 12) ? false : true;
        }

        return false;
    }

    public static function sanitize(string $number): string
    {
        if(substr($number, 0, 1) == '0') {
            $number = ltrim($number, '0');
        } else {
            $number = preg_replace("/^\+?+62/", '',$number);
        }

        $number = preg_replace("/[^0-9]/", "", $number);
        return $number;
    }
}
