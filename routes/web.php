<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\BackendController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ProductController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::group(['prefix' => 'admin', 'as'=>'admin.' ], function(){

//    Route::group(['middleware' => 'guest' ], function(){
//        Route::get('/login',               [BackendController::class, 'login'    ])->name('login');
//        Route::get('/forget_password',     [BackendController::class, 'forget_password'])->name('forget_password');
//    });


    Route::get('/index', [BackendController::class, 'index'])->name('dashboard.index');

    Route::resource('categories', CategoryController::class);

    Route::resource('products', ProductController::class);
});
