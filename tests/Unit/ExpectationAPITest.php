<?php

describe('Test Expectation funcion API', function() {
    it('tests the toBe() function', function() {
        $value = 10;

        expect($value)->toBe(10);

        expect($value)->toBeInt()->toBe(10);
    });


    it('tests the toBeTrue() and toBeFalse() functions', function() {
        $value1 = true;
        $value2 = false;


        expect($value1)->toBeTrue();

        expect($value2)->toBeFalse();
    });

    it('tests the toBeNull() function', function() {
        $value = null;        

        expect($value)->toBeNull();
    });

    it('tests the toBeEmpty() function', function() {
        $value = '';        

        expect($value)->toBeEmpty();
    });

    it('tests the toBeArray() function', function() {
        $value = [];

        expect($value)->toBeArray();
    });

    it('tests the toBeIn() function', function() {
        $value = 10;
        $values = [10, 20, 30];

        expect($value)->toBeIn($values);
    });

    it('tests the toBeJson() function', function() {
        $value = '{"name":"Andre"}';

        expect($value)->toBeJson();
    });

    it('tests the toMatch() function', function() {
        $value = 'Hello World';

        expect($value)->toMatch('/Hello/ ');
    });

    it('tests the toBeppercase() function', function() {
        $value = 'HELLO';

        expect($value)->toBeUppercase();
    });
});