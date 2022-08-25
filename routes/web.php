<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoutController;

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



Route::get('/redirects',[HomeController::class,'index']);
Route::post('/adduser',[HomeController::class,'adduser']);

Route::get('/admin',[HomeController::class,'admin']);
Route::get('/user',[HomeController::class,'user']);

Route::get('/addfund',[HomeController::class,'addfund']);

Route::post('/addfund',[HomeController::class,'submitfund']);

Route::get('/fundlist',[HomeController::class,'fundlist']);



Route::get('/userlist',[HomeController::class,'showuser'])->name('userlist');

//category

Route::get('/category',[HomeController::class,'category']);

Route::post('/submitcategory',[HomeController::class,'SubmitCategory']);

Route::get('/categorylist',[HomeController::class,'categorylist']);

Route::get('/editcategory/{id}',[HomeController::class,'editcategory']);

Route::post('/updatecategory/{id}',[HomeController::class,'updatecategory']);







Route::get('/delete/{id}',[HomeController::class,'deleteData']);


Route::get('/deletefund/{id}',[HomeController::class,'deletefund']);


//user edit

Route::get('/edit/{id}',[HomeController::class,'editData']);


Route::post('/update/{id}',[HomeController::class,'updateData']);


//fund

Route::get('/editfund/{id}',[HomeController::class,'editfund']);

Route::post('/updatefund/{id}',[HomeController::class,'updatefund']);











Route::group(['middleware' => ['auth']], function() {
    /**
    * Logout Route
    */
    Route::get('/logout', [LogoutController::class,'perform'])->name('logout.perform');
 });





Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});