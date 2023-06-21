<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/redirect', [Homecontroller::class, 'redirect']);

Route::get('/index', [Homecontroller::class, 'index']);

Route::redirect('/', '/index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/product', [Admincontroller::class, 'product']);

Route::post('/uploadproduct', [Admincontroller::class, 'uploadproduct']);

Route::get('/showproduct', [Admincontroller::class, 'showproduct']);

Route::get('/deleteproduct/{id}', [Admincontroller::class, 'deleteproduct']);

Route::get('/updateview/{id}', [Admincontroller::class, 'updateview']);

Route::get('/updateproduct/{id}', [Admincontroller::class, 'updateproduct']);

Route::get('/search', [HomeController::class, 'search']);

Route::post('/addcart/{id}', [HomeController::class, 'addcart']);

Route::get('/showcart', [HomeController::class, 'showcart']);

Route::get('/delete/{id}', [HomeController::class, 'deletecart']);

Route::post('/order', [HomeController::class, 'confirmorder']);

Route::get('/showorder', [Admincontroller::class, 'showorder']);

Route::get('/updatestatus/{id}', [Admincontroller::class, 'updatestatus']);