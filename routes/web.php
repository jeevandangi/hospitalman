<?php

use App\Http\Controllers\admin_controller;
use App\Http\Controllers\adminPannel_controller;
use App\Http\Controllers\Controller;
use App\Http\Controllers\logging_controller;
use App\Models\adminPannel_model;
use Illuminate\Support\Facades\Route;

 
 Route::get('/', function () {
    return view('adminLogging');
})->name('logging');
Route::get('/teacher', function () {
    return view('teacherLogging');
});
Route::get('/user', function () {
    return view('userLogging');
});
Route::post('/adminLogging',[admin_controller::class,'store'])->name('adminLogging');
Route::get('/adminpannel/{id}',[adminPannel_controller::class,'index'])->name('admin');
 