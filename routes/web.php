<?php

use Illuminate\Support\Facades\Route;

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

Route::controller(App\Http\Controllers\AccessController::class)->group(
    function () {
        Route::get('/testaccess', 'testAccess')->name('test');
    }
);



Route::get('/', function () {
    return view('welcome');
});
