<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RuangController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\PerekapanController;
use App\Http\Controllers\PengadaanController;
use App\Http\Controllers\KondisiController;
use App\Http\Controllers\PembenahanController;
use App\Http\Controllers\PenghapusanController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\DistribusiController;
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

Route::resource('/dataruangsekolah', RuangController::class);

// Route::get('/formdataruang', function () {
//     return view('Menu.DataRuang.formdataruang');
// });

// Route::get('/dataruangkelas', function () {
//     return view('Menu.dataruang');
// });

// Route::get('/editdataruang', function () {
//     return view('Menu.editdataruang');
// });

//========================================//
Route::get('/dataakun', function () {
    return view('Koordinator.dataakun');
});
//========================================//

Route::resource('/dataperencanaan', PlanController::class);

// Route::get('/dataperencanaan', function () {
//     return view('Menu.Perencanaan.dataperencanaan');
// });

// Route::get('/formperencanaan', function () {
//     return view('Menu.Perencanaan.formperencanaan');
// });

Route::resource('/dataperekapan', PerekapanController::class);

// Route::get('/dataperekapan', function () {
//     return view('Koordinator.dataperekapan');
// });

// Route::get('/formperekapan', function () {
//     return view('Menu.Perencanaan.formperekapan');
// });

Route::resource('/datapengadaan', PengadaanController::class);

// Route::get('/datapengadaan', function () {
//     return view('Koordinator.datapengadaan');
// });

// Route::get('/formpengadaan', function () {
//     return view('Menu.Pengadaan.formpengadaan');
// });

Route::resource('/datapendistribusian', DistribusiController::class);

// Route::get('/datapendistribusian', function () {
//     return view('Menu.Pendistribusian.datapendistribusian');
// });

// Route::get('/formpendistribusian', function () {
//     return view('Menu.Pendistribusian.formpendistribusian');
// });

// Route::get('/detailpendistribusian', function () {
//     return view('Menu.Pendistribusian.detailpendistribusian');
// });

Route::resource('/datainventaris', InventoryController::class);

// Route::get('/datainventaris', function () {
//     return view('Menu.Inventaris.datainventaris');
// });

// Route::get('/forminventaris', function () {
//     return view('Menu.Inventaris.forminventaris');
// });

// Route::get('/detailinventaris', function () {
//     return view('Menu.Inventaris.detailinventaris');
// });

Route::get('/datapeminjaman', function () {
    return view('Menu.Peminjaman.datapeminjaman');
});

// Route::get('/formpeminjaman', function () {
//     return view('Menu.Peminjaman.formpeminjaman');
// });

Route::get('/datapengembalian', function () {
    return view('Menu.Peminjaman.datapengembalian');
});

// Route::get('/formpengembalian', function () {
//     return view('Menu.Peminjaman.formpengembalian');
// });

Route::resource('/datakondisi', KondisiController::class);

// Route::get('/datakondisi', function () {
//     return view('Menu.Kondisi.datakondisi');
// });

// Route::get('/formkondisi', function () {
//     return view('Menu.Kondisi.formkondisi');
// });

Route::resource('/datapembenahan', PembenahanController::class);

// Route::get('/datapembenahan', function () {
//     return view('Menu.Kondisi.datapembenahan');
// });

// Route::get('/formpembenahan', function () {
//     return view('Menu.Kondisi.formpembenahan');
// });

Route::resource('/datapenghapusan', PenghapusanController::class);

// Route::get('/datapenghapusan', function () {
//     return view('Menu.Kondisi.datapenghapusan');
// });

// Route::get('/formpenghapusan', function () {
//     return view('Menu.Kondisi.formpenghapusan');
// });

//administrator

Route::get('/editadmtr', function () {
    return view('Koordinator.editadministrator');
});

Route::get('/formuser', function () {
    return view('Koordinator.formuser');
});

Route::get('/coba', function () {
    return view('Menu.coba');
});