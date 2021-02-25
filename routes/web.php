<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\csvcontroller;
use App\Http\Controllers\ProfilesController;

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
    return view('index');
});



Route::group(['middleware' => 'auth'], function () {
   

    Route::get('/profile/{user}', 'App\Http\Controllers\ProfilesController@index')->name('profile.show');

    Route::get('/csvgenerator', function () {
        return view('csvgenerator');
    });

    Route::post('/csvgenerator', 'App\Http\Controllers\csvcontroller@main')->name('csvcontroller.main');

});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');












