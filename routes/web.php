<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CasalsController;

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

Route::get('/', [CasalsController::class, 'show'])->name('casals.show');

Route::get('insertar-casals', [CasalsController::class, 'create'])->name('casals.insert');
Route::get('modificar-casals/{id}', [CasalsController::class, 'edit'])->name('casals.update');
Route::get('borrar-casals/{id}', [CasalsController::class, 'destroyShow'])->name('casals.delete');
// CATEGORIAS POST
Route::post('insertar-casals', [CasalsController::class, 'create'])->name('casals.insert-post');
// CATEGORIAS PUT
Route::put('modificar-casals/{id}', [CasalsController::class, 'update'])->name('casals.update-put');
// CATEGORIAS DELETE
Route::delete('borrar-casals/{id}', [CasalsController::class, 'destroy'])->name('casals.delete-delete');
