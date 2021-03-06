<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;

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
    return redirect('users');
});

Route::get('users',[userController::class,'index']);
Route::get('addusers',[userController::class,'createUsers']);
Route::post('storeusers',[userController::class,'storeUsers']);
Route::get('editusers/{id}',[userController::class,'editUsers']);
Route::post('updateusers',[userController::class,'updateUsers']);
Route::get('deleteusers/{id}',[userController::class,'destroyUsers']);