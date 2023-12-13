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

Route::get('/main', function () {
    return view('main.index');});
    
/*とりあえずお試しのルーティング(服選ぶページ)*/    
Route::get('/register2', function () {
    return view('auth.register2');});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/users/{id}', [UsersController::class,'show'])->name('UserProfole');

/*新規登録画面*/    
Route::get('/register', [AreaController::class, 'area'])->name('Areaview');
/*メイン画面*/    
Route::get('/main', [UserController::class, 'area'])->name('Areaview');

require __DIR__.'/auth.php';