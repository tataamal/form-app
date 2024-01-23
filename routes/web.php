<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BackupController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KrisarController;
use App\Http\Controllers\MonitoringController;
use App\Http\Controllers\RestoreController;
use App\Http\Controllers\RfcController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UserController;
use App\Models\Rfc;
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
    return view('index');
});

Route::middleware(['guest'])->group(function(){
    Route::get('login', [SessionController::class, 'index']);
    Route::post('login', [SessionController::class, 'login']);
    Route::get('register', [SessionController::class, 'register']);
    Route::post('submit-register', [SessionController::class, 'store']);
}); 

Route::middleware(['auth'])->group(function(){
    Route::get('user/dashboard', [DashboardController::class,'user']);
    Route::get('user/rfc-create', [RfcController::class,'user_rfc_create']);
    Route::get('user/rfc-index', [RfcController::class,'user_rfc_index']);
    Route::post('submit-rfc', [RfcController::class, 'store']);
    Route::get('user/monitoring-index', [MonitoringController::class,'create']);
    Route::post('user/submit-monitoring', [MonitoringController::class,'store']);
    Route::get('user/monitoring-create', [MonitoringController::class,'user_monitoring_create']);
    Route::get('user/backup-index', [BackupController::class,'user_backup_index']);
    Route::get('user/backup-create', [BackupController::class,'user_backup_create']);
    Route::get('user/restore-index', [RestoreController::class,'user_restore_index']);
    Route::get('user/restore-create', [RestoreController::class,'user_restore_create']);
    Route::get('admin/dashboard', [DashboardController::class,'index']);
    Route::get('admin/kelola_admin', [AdminController::class, 'index']);
    Route::get('admin/kelola_user', [UserController::class, 'index']);
    Route::get('admin/rfc', [RfcController::class, 'index']);
    Route::get('admin/riwayat_rfc', [RfcController::class, 'create']);
    Route::get('admin/monitoring', [MonitoringController::class, 'index']);
    Route::get('admin/riwayat_monitoring', [MonitoringController::class, 'riwayat']);
    Route::get('admin/restore', [RestoreController::class, 'index']);
    Route::get('admin/riwayat_restore', [RestoreController::class, 'riwayat']);
    Route::get('admin/backup', [BackupController::class, 'index']);
    Route::get('admin/riwayat_backup', [BackupController::class, 'create']);
    Route::post('submit-backup', [BackupController::class, 'store']);
    Route::get('admin/krisar',[KrisarController::class, 'index']);
    Route::get('logout', [SessionController::class, 'logout']);
}); 