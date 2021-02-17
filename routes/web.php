<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\csvcontroller;

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

Route::get('/csvgenerator', function () {
    return view('csvgenerator');
});
/*
Route::group(['middleware' => 'auth'], function () {
    Route::get('/', function () {
            return view('welcome');
    });
});
*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::post('/csvgenerator', 'App\Http\Controllers\csvcontroller@main')->name('csvcontroller.main');






