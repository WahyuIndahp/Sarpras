<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// AUTH ROUTES
Route::post('/auth/login', 'App\Http\Controllers\APIController\AuthController@login');
Route::post('/auth/register', 'App\Http\Controllers\APIController\AuthController@register');
// AUTH ROUTES

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::resource('users', App\Http\Controllers\APIController\UserController::class);
    Route::resource('admins', App\Http\Controllers\APIController\AdminController::class);
    Route::resource('instances', App\Http\Controllers\APIController\InstanceController::class);
    Route::resource('installation_sch', App\Http\Controllers\APIController\InstallationScheduleController::class);

    Route::resource('managers', App\Http\Controllers\APIController\ManagerController::class);
    Route::resource('programmers', App\Http\Controllers\APIController\ProgrammerController::class);
    Route::resource('reportinstallations', App\Http\Controllers\APIController\ReportInstallationController::class);
    Route::resource('reportphotos', App\Http\Controllers\APIController\ReportPhotoController::class);

    Route::resource('technicians', App\Http\Controllers\APIController\TechnicianController::class);
    Route::resource('technician_instances', App\Http\Controllers\APIController\TechnicianInstanceController::class);
    Route::resource('ticketings', App\Http\Controllers\APIController\TicketingController::class);

    Route::resource('categories', App\Http\Controllers\APIController\CategorieController::class);
    Route::resource('components', App\Http\Controllers\APIController\ComponentController::class);
    Route::get('/me', function (Request $request) {
        return auth()->user();
    });

    Route::post('/instances/update_instance', 'App\Http\Controllers\APIController\InstanceController@update_instance');
    Route::post('/reportphotos/update_report_photo', 'App\Http\Controllers\APIController\ReportPhotoController@update_report_photo');

    Route::post('/auth/logout', 'App\Http\Controllers\APIController\AuthController@logout');
});

Route::fallback(function () {
    return response()->json(['error' => 'Wrong route. Check again!'], 404);
});