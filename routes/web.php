<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TareaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Se pueden tener mismas rutas siempre y cuando los métodos sean diferentes (get o post)
/*Route::get('tarea', [TareaController::class, 'index']);
Route::get('tarea/create', [TareaController::class, 'create']);
Route::post('tarea', [TareaController::class, 'store']);
*/

//con Route::resource se crean automáticamente las rutas sin necesidad de estarlas creando una por una
//Para listarlas ejecutamos el comando "php artisan route:list | grep tarea" en la terminal
Route::resource('tarea', TareaController::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
