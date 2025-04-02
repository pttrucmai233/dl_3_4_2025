<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD

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
=======
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\RoomController;

Route::get('/rooms', [RoomController::class, 'index'])->name('rooms.index');
Route::get('/rooms/{id}/edit', [RoomController::class, 'edit'])->name('rooms.edit');
Route::put('/rooms/{id}', [RoomController::class, 'update'])->name('rooms.update');
>>>>>>> 1225555 (Thông tin phòng)

Route::get('/', function () {
    return view('welcome');
});
