<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Firebase\ContactController;
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


Route::get('/contacts page',[ContactController::class, 'index'])->name('contact-page');
Route::post('/add contacts', [ContactController::class, 'create'])->name('add-contacts');
Route::get('/edit contacts/{id}', [ContactController::class, 'edit'])->name('edit-contacts');
Route::put('/update contacts/{id}', [ContactController::class, 'update'])->name('update-contacts');
Route::delete('/delete contacts/{id}', [ContactController::class, 'destroy'])->name('delete-contacts');



Route::get('/', function () {
    return view('welcome');
});
