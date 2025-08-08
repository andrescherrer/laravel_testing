<?php

// vamos indicar que queremos usar uma instância do MainController
use App\Http\Controllers\MainController;

//vamos indicar que queremos efetuar um teste ao método index
test('Estou a testar o MainController>index', function() {

    // vamos criar uma instãncia do MainController

    $mainController = new MainController();

    $result = $mainController->index();

    expect($result)->toBeString();

    expect($result)->toEqual("Olá Mundo!");
});