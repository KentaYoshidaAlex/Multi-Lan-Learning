<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CreateUserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\QuizMainController;


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
    return view('index');
})->name('index');

Route::get('/login/input', function () {
    return view('index');
})->name('loginInput');

Route::get('/quizMain', function () {
    return view('index');
})->name('quizMain');


Route::prefix('createUser')
// ->middleware(['auth'])
->controller(CreateUserController::class)
// ->name('createUser.')
->group(function(){
    Route::get('/input', 'input')->name('input');
    Route::get('/input/{loginId_userName}{loginPass}', 'reInput')->name('reInput');
    Route::post('/check_content', 'check_content')->name('check_content');
    Route::post('/', 'store')->name('store');
});

Route::prefix('login')
->controller(LoginController::class)
->group(function(){
    Route::post('/input','login')->name('loginInput');
    Route::post('/loginResult', 'loginResult')->name('loginResult');
});

Route::post('/quizMain', [QuizMainController::class, 'quizMain'])->name('quizMain');;
Route::post('/quizLogOut', [QuizMainController::class, 'quizLogOut'])->name('quizLogOut');;


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';