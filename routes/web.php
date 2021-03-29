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
   

  

    Route::get('/csvgenerator', function () {
        return view('csvgenerator');
    });
    Route::post('/csvgenerator', 'App\Http\Controllers\csvcontroller@main')->name('csvcontroller.main');



    Route::get('/profile', 'App\Http\Controllers\Profilecontroller@index')->name('profile');
    
    Route::get('/orders', function () {
        return view('orders');
    });

    Route::get('/shop', 'App\Http\Controllers\ShopController@index')->name('shop');
    Route::get('/users', 'App\Http\Controllers\UsersController@index')->name('users');


    Route::get('/reports', function () {
        return view('getback');
    });

    Route::get('/integrations', function () {
        return view('getback');
    });


});


Auth::routes();

Route::get('/workflow', [App\Http\Controllers\WorkflowController::class, 'index'])->name('workflow');












