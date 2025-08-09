<?php

describe('Testes com datasets', function(){

    $clients = [
        ['André', 45],
        ['Priscila', 39],
        ['Eduardo', 44],
    ];

    it('Verifies if all clients have nome', function($name, $age){
        expect($name)->toBeString();
    })->with($clients);

    it('Verifies if all clients are adults', function($name, $age){
        expect($age)->toBeGreaterThanOrEqual(18)->toBeInt();
    })->with($clients);

});