<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PaginaController;

Route::get('/', [PaginaController::class, 'inicio']);
Route::get('/contacto', [PaginaController::class, 'contacto']);
Route::get('/hola', function () {
    return 'Hola mundo';
});

Route::get('/usuario/{nombre}', function ($nombre) {
    return 'Hola ' . $nombre;
});

Route::get('/suma/{a}/{b}', function ($a, $b) {
    return $a + $b;
});
