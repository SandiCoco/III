<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;

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

Route::controller(PersonaController::class)->group(function()
{
    route::get('/customers', 'index')->name('customers.index');
    route::get('/customers/{customer}', 'show')->name('customers.show');
    route::get('/customers/{customer}/edit', 'edit')->name('customers.edit');
    route::post('/customers', 'store')->name('customers.store');
    route::put('/customers/{customer}', 'update')->name('customers.update');
    route::get('/create', 'create')->name('customers.create');
    route::get('/customers/{customer}/friends', 'friends')->name('customers.friends');
}
);