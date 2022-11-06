<?php

use App\Http\Controllers\user_controller;
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

// Route::get('/', function () {
//     return view('app');
// });

Route::group(['middleware' => 'auth'], function () {
    Route::get('/',  function () {
        return view('fitur.dashboard', ['loc' => "halo"]);
    });

    Route::get('/dashboard', function () {
        return view('fitur.dashboard', ['loc' => "halo"]);
    });
    Route::get('/list_jadwal', function () {
        return view('fitur.list_jadwal', ['loc' => "halo"]);
    });
    Route::get('/list_peserta', function () {
        return view('fitur.list_peserta', ['loc' => "halo"]);
    });
});

Route::get('/login', [user_controller::class, 'tampil_login'])->name("login");
Route::post('/login', [user_controller::class, 'login']);

Route::get('/dummy',[user_controller::class,'create_user']);
