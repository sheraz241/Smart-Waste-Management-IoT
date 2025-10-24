<?php

use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

                    // Driver Routes

Route::get('/drivers',[App\Http\Controllers\DriverController::class,'driver'])->name('driver');
Route::get('/add_drivers',[App\Http\Controllers\DriverController::class,'create'])->name('create_driver');
Route::post('/store_drivers',[App\Http\Controllers\DriverController::class,'store'])->name('store_driver');
Route::get('/edit_drivers/{id}',[App\Http\Controllers\DriverController::class,'edit'])->name('edit_driver');
Route::post('/update_drivers/{id}',[App\Http\Controllers\DriverController::class,'update'])->name('update_driver');
Route::get('/delete_drivers/{id}',[App\Http\Controllers\DriverController::class,'destroy'])->name('delete_driver');

                    // Device Routes

Route::get('/device',[App\Http\Controllers\DeviceController::class,'device'])->name('device');
Route::get('/add_device',[App\Http\Controllers\DeviceController::class,'create'])->name('create_device');
Route::post('/store_device',[App\Http\Controllers\DeviceController::class,'store'])->name('store_device');
Route::get('/edit_device/{id}',[App\Http\Controllers\DeviceController::class,'edit'])->name('edit_device');
Route::post('/update_device/{id}',[App\Http\Controllers\DeviceController::class,'update'])->name('update_device');
Route::get('/delete_device/{id}',[App\Http\Controllers\DeviceController::class,'destroy'])->name('delete_device');

                   // Device Routes

Route::get('/truck',[App\Http\Controllers\TruckController::class,'truck'])->name('truck');
Route::get('/add_truck',[App\Http\Controllers\TruckController::class,'create'])->name('create_truck');
Route::post('/store_truck',[App\Http\Controllers\TruckController::class,'store'])->name('store_truck');
Route::get('/edit_truck/{id}',[App\Http\Controllers\TruckController::class,'edit'])->name('edit_truck');
Route::post('/update_truck/{id}',[App\Http\Controllers\TruckController::class,'update'])->name('update_truck');
Route::get('/delete_truck/{id}',[App\Http\Controllers\TruckController::class,'destroy'])->name('delete_truck');
