<?php

use App\Http\Controllers\uploadCourse;
use App\Models\students;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth;
use GuzzleHttp\Middleware;
use PhpParser\Node\Expr\FuncCall;

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



Route::post('/uploadPdf',
[uploadCourse::class, 'store']
);

Route::get('/up',[
    view('upload_course')
]
);
Route::get('/up', function () {
    return view('upload_course');
});

Route::get('/showPdf',
[uploadCourse::class, 'show']
);
Route::get('/',[Auth::class,'login'])->middleware('alreadyLoggedIn');
Route::get('/login',[Auth::class,'login'])->middleware('alreadyLoggedIn');
Route::get('/welcome',[Auth::class,'dashboard'])->middleware('isLoggedIn');
Route::get('/courseplanner',[Auth::class,'courseplanner'])->middleware('isLoggedIn');
Route::get('/gpacalculator',[Auth::class,'gpacalculator'])->middleware('isLoggedIn');
Route::get('/profile',[Auth::class,'profile'])->middleware('isLoggedIn');
Route::get('/registration',[Auth::class,'registration'])->middleware('alreadyLoggedIn');
Route::post('/registered-user',[Auth::class,'registerUser'])->name
('registered-user');
Route::post('/login-user',[Auth::class,'loginUser'])->name
('login-user');
Route::get('/dashboard',[Auth::class,'dashboard'])->middleware('isLoggedIn');
Route::get('/logout',[Auth::class,'logout']);
Route::get('/admin',[Auth::class,'admin'])->middleware('isLoggedIn');
