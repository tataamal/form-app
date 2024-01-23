<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Session\SessionFactoryInterface;

use function PHPUnit\Framework\returnSelf;

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
});
Route::get('login', [SessionController::class, 'index']);
Route::post('login', [SessionController::class, 'login']);
Route::get('register', [SessionController::class, 'register']);
Route::get('user/dashboard', [DashboardController::class,'user']);
Route::get('admin/dashboard', [DashboardController::class,'index']);
Route::get('logout', [SessionController::class, 'logout']);