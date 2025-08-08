<?php

namespace App\Services;

class MainOperations
{
    public static function generateHash($numChars = 32): string 
    {
        return bin2hex(random_bytes((int)$numChars/2));
    }

    public static function mathOperation($a, $b, $operation): int|float|null
    {
        // executa uma das quatro operações matemáticas base
        switch($operation) {
            case 'add':
                return $a + $b;
                break;
            case 'subtract':
                return $a - $b;
                break;
            case 'multiply':
                return $a * $b;
                break;
            case 'divide':
                return $a / $b;
                break;
            default:
                return null;
                break;
        }
    }
}