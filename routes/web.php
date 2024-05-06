<?php

use Illuminate\Support\Facades\Route;
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

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/newUser', function () {
    return view('addUser');
})->name('newUser');

Route::get('/', [UserController::class, 'getUser'])->name('home');
Route::get('/singleUser/{id}', [UserController::class, 'singleUser'])->name('singleUser');
Route::post('/createUser', [UserController::class, 'addUser'])->name('createUser');
Route::get('/updateUserPage/{id}', [UserController::class, 'updateUserPage'])->name('updateUserPage');
Route::put('/updateUser/{id}', [UserController::class, 'updateUser'])->name('updateUser');
Route::get('/deleteUser/{id}', [UserController::class, 'deleteUser'])->name('deleteUser');

