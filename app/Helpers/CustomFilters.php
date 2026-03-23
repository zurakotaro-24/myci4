<?php

namespace App\Helpers;

// Isn't used.

if(!function_exists('hideNumbers'))
{
    function hideNumbers(?string $value, int $display = 4): string 
    {
        $txt = '';
        
        for($i = 0; $i < strlen($value); $i++)
        {
            $txt .= $i < $display ? $value[$i] : "X";
        }

        return $txt;
    }
};