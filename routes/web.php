<?php

use Illuminate\Support\Facades\Route;
// TIP IMPORTANTE: No olvides importar el controlador aquí abajo
use App\Http\Controllers\UserController;
use App\Http\Controllers\AnimalController;
Route::get('/', function () {
    return view('welcome');
});

// Definimos la ruta /usuarios que apunta al método index del UserController
Route::get('/usuarios', [UserController::class, 'index']);


Route::get('/animales', [AnimalController::class, 'index']);//lista todos los animales.
Route::get('/animales/crear', [AnimalController::class, 'create']);//muestra el formulario para cargar uno nuevo.
Route::post('/animales', [AnimalController::class, 'store']);//recibe los datos del formulario y los guarda.
Route::get('/animales/{id}/editar', [AnimalController::class, 'edit']);//muestra el formulario de edición con los datos de ese animal.
Route::put('/animales/{id}', [AnimalController::class, 'update']);//recibe la edición y actualiza ese animal.
Route::delete('/animales/{id}', [AnimalController::class, 'destroy']);//borra ese animal.