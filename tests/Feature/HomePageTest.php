<?php

test('Verificar se a welcome page está disponível', function () {
    
    $response = $this->get('/');

    expect($response->status())->toBe(200);
});
