<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

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
    return 'главная';
});
 

Route::prefix('posts')->group(function() {

    Route::get('/',[PostController::class, 'all']);
    Route::get('/{id}',[PostController::class, 'show'])->whereNumber('id');
});


Route::prefix('user')->group(function() {

    Route::get('/', [UserController::class, 'show']);
    Route::get('/all', [UserController::class, 'all']);
    Route::get('/{name}', [UserController::class, 'showName'])->whereAlpha('name');
    Route::get('/{name}/{surname}', [UserController::class, 'showFullName'])->whereAlpha('name')->whereAlpha('surname');

});


Route::get('/city/{city?}', function(string $city = 'minsk') {
    return 'city: ' . $city;
});