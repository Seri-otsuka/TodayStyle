<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FashonController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AreaController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return view('toppage');
});

/*Route::get('/main', function () {
    return view('main.index');})->name('main');*/
    
Route::get('/main',[UserController::class,'todouhuken'])->name('main');
//Route::get('/main/{user}',[FashonController::class,'fashon'])->name('main.fashon');
    
Route::get('/coordination', function () {
    return view('main.coordination');})->name('coordination');
    
Route::get('/goout', function () {
    return view('main.goout');})->name('goout');
    
/*とりあえずお試しのルーティング(服選ぶページ)このページはのちに消える*/    
Route::get('/register2', function () {
    return view('auth.register2');});

//新規登録入力情報の確認ページこのページも後々消える
Route::get('/check', function () {
    return view('auth.check');});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
   // Route::get('/main/{user}',[FashonController::class,'fashon'])->name('main.fashon');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/users/{id}', [UsersController::class,'show'])->name('UserProfole');

/*新規登録画面*/    
Route::get('/register', [AreaController::class, 'area'])->name('Areaview');
/*メイン画面--いったんコメントアウトします*/    
//Route::get('/main', [UserController::class, 'area'])->name('Areaview');

require __DIR__.'/auth.php';