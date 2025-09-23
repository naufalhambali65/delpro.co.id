<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\StyleController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomepageController::class, 'index'])->name('home');
Route::get('/about', [HomepageController::class, 'about'])->name('about');
Route::get('/project', [HomepageController::class, 'project'])->name('project');
Route::get('/contact', [HomepageController::class, 'contact'])->name('contact');


Route::get('/admin', [AdminController::class, 'index'])->name('admin')->middleware('auth');
Route::get('/login', [LoginController::class, 'index'])->name('login.index')->middleware('guest');
Route::post('/login', [LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

Route::post('/upload', [UploadController::class, 'store'])->name('upload.store');
Route::delete('/upload/revert', [UploadController::class, 'revert'])->name('upload.revert');;
Route::delete('/upload/remove', [UploadController::class, 'remove'])->name('upload.remove');;
Route::post('/clear-temp', [UploadController::class, 'clearTemp'])->name('clear.temp');


Route::resource('/admin/teams', TeamController::class)->middleware('auth');
Route::resource('/admin/clients', ClientController::class)->middleware('auth');
Route::resource('/admin/projects', ProjectController::class)->middleware('auth');
Route::resource('/admin/types', TypeController::class)->middleware('auth');
Route::resource('/admin/styles', StyleController::class)->middleware('auth');
Route::resource('/admin/cities', CityController::class)->middleware('auth');
