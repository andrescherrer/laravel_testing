<?php

use App\Services\MainOperations;

describe('MainOperations - testar o método mathOperation', function(){

    it('tests the addition', function() {
        $a = 10;
        $b = 5;
        $operation = "add";

        $result = MainOperations::mathOperation($a, $b, $operation);
        expect($result)->toBe(15);
    });


    it('tests the subtration', function() {
        $a = 10;
        $b = 5;
        $operation = "subtract";

        $result = MainOperations::mathOperation($a, $b, $operation);
        expect($result)->toBe(5);
    });

    it('tests the multiplication', function() {
        $a = 10;
        $b = 5;
        $operation = "multiply";

        $result = MainOperations::mathOperation($a, $b, $operation);
        expect($result)->toBe(50);
    });

    it('tests the division', function() {
        $a = 10;
        $b = 5;
        $operation = "divide";

        $result = MainOperations::mathOperation($a, $b, $operation);
        expect($result)->toBe(2);
    });
});