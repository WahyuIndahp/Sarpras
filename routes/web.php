<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RuangController;
use App\Http\Controllers\SarpraseController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\PerekapanController;
use App\Http\Controllers\PengadaanController;
use App\Http\Controllers\KondisiController;
use App\Http\Controllers\PembenahanController;
use App\Http\Controllers\PenghapusanController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\DistribusiController;
use App\Http\Controllers\PermintaanController;
use App\Http\Controllers\PinjamController;
use App\Http\Controllers\ReturnController;
use App\Http\Controllers\QrcodeController;
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

//Route::get('/register', [RegisterController::class, 'index']->middleware('guest'));
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');

Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');

Route::post('/login', [LoginController::class, 'authenticate']);

//logout
// Route::get('/logout', function () {
//     return view('login');
// });

Route::post('/logout', [LoginController::class, 'logout']);

//Route::get('/db', [DashboardController::class, 'index'])->middleware('auth');

Route::get('/db', function () {
    return view('welcome');
})->middleware('auth');

// Route::get('/login', function () {
//     return view('login');
// });

Route::get('/datapengguna', [App\Http\Controllers\DataUserController::class, 'index'])->middleware('ceklevel:admin');

Route::resource('/datasarpras', SarpraseController::class)->middleware('ceklevel:admin');

Route::resource('/dataruangsekolah', RuangController::class)->middleware('ceklevel:admin');

Route::resource('/dataperencanaan', PlanController::class)->middleware('ceklevel:admin,pjruang');

Route::resource('/dataperekapan', PerekapanController::class)->middleware('ceklevel:admin');
Route::get('/lihatperekapan', [App\Http\Controllers\PerekapanController::class, 'indexall'])->middleware('ceklevel:staff,pjruang');

Route::resource('/datapengadaan', PengadaanController::class)->middleware('ceklevel:admin');

Route::get('/lihatpengadaan', [App\Http\Controllers\PengadaanController::class, 'indexall'])->middleware('ceklevel:staff,pjruang');

Route::resource('/datapendistribusian', DistribusiController::class)->middleware('ceklevel:admin,pjruang');

Route::resource('/datainventaris', InventoryController::class)->middleware('ceklevel:admin');
Route::resource('/dataqrcode', QrcodeController::class)->middleware('ceklevel:admin');
Route::get('/lihatinventaris', [App\Http\Controllers\InventoryController::class, 'indexall'])->middleware('ceklevel:staff');

Route::resource('/datapermintaan', PermintaanController::class)->middleware('ceklevel:admin,pjruang');

Route::resource('/datapeminjaman', PinjamController::class)->middleware('ceklevel:admin,staff');

Route::resource('/datareturn', ReturnController::class)->middleware('ceklevel:admin,staff');

Route::resource('/datakondisi', KondisiController::class)->middleware('ceklevel:admin');
Route::get('/lihatkondisi', [App\Http\Controllers\KondisiController::class, 'indexall'])->middleware('ceklevel:staff');

Route::resource('/datapembenahan', PembenahanController::class)->middleware('ceklevel:admin');
Route::get('/lihatpembenahan', [App\Http\Controllers\PembenahanController::class, 'indexall'])->middleware('ceklevel:staff');

Route::resource('/datapenghapusan', PenghapusanController::class)->middleware('ceklevel:admin');
Route::get('/lihatpenghapusan', [App\Http\Controllers\PenghapusanController::class, 'indexall'])->middleware('ceklevel:staff');

//administrator
Route::get('/dataakun', function () {
    return view('admin.dataakun');
});

Route::get('/formuser', function () {
    return view('admin.formuser');
});

Route::get('/coba', function () {
    return view('Menu.coba');
});

