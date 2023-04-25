<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('dashboard', 'HomeController@dashboard')->name('dashboard');
});

Route::group(['middleware' => 'role:editor'], function () {
    Route::get('/editor', function () {
        return "Welcome editor!";
    });
});


require __DIR__.'/auth.php';
