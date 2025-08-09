<?php

describe('Test Expectation modifiers and chaning', function() {
    
    it('tests the and() modifier', function() {
        $name = "André";
        $lastname = "Scherrer";

        expect($name)
            ->toBe("André")
            ->and($lastname)
            ->toBe("Scherrer");
    });

    it('tests if value is one or another', function() {
        $value = 10;

        expect($value)
            ->toBeIn([10, 20]);
    });

    it('tests the not() modifier', function() {
        $value = 20;

        expect($value)->not()->toBe(10);
    });

    it('tests the sequence() modifier', function(){
        $values = [1, 2, 5];

        expect($values)->sequence(
            fn($value) => $value->toBeInt()->toBe(1),
            fn($value) => $value->toBeInt()->toBe(2),
            fn($value) => $value->toBeInt()->toBe(5),
        );
    });
});
