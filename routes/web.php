<?php

use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\StyleController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\UserController;


Route::get('/', [HomepageController::class, 'index'])->name('home');

Route::get('lang/{locale}', function ($locale) {
    $allowed = ['id', 'en'];
    if (! in_array($locale, $allowed)) {
        abort(404);
    }

    Session::put('locale', $locale);
    Cookie::queue('locale', $locale, 60 * 24 * 30);

    $intended = url()->previous() ?: '/';
    return Redirect::to($intended);
})->name('lang.switch');

Route::get('/about', [HomepageController::class, 'about'])->name('about');
Route::get('/project/{project}', [HomepageController::class, 'detailProject'])->name('project.detail');
Route::get('/project', [HomepageController::class, 'project'])->name('project');
Route::get('/contact', [HomepageController::class, 'contact'])->name('contact');
Route::get('/people', [HomepageController::class, 'team'])->name('team');
Route::get('/client', [HomepageController::class, 'client'])->name('client');


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

Route::get('/admin/changePassword', [UserController::class, 'index'])->middleware('auth')->name('changePass.index');
Route::put('/admin/changePassword', [UserController::class, 'changePass'])->middleware('auth')->name('changePass.update');

Route::get('/admin/messages', [MessageController::class, 'index'])->middleware('auth')->name('messages.index');
Route::delete('/admin/messages/{message}', [MessageController::class, 'destroy'])->middleware('auth')->name('messages.destroy');
Route::put('/admin/messages/{message}', [MessageController::class, 'updateStatus'])->middleware('auth')->name('messages.updateStatus');
Route::get('/admin/messages/{message}', [MessageController::class, 'show'])->middleware('auth')->name('messages.show');

Route::get('/preview/projects/{encryptedSlug}', [ProjectController::class, 'preview'])->name('preview');

Route::post('/sendEmail', [MessageController::class, 'store'])->name('sendEmail');

Route::get('/copy-success', function () {
    session()->flash('success', 'Link successfully copied to clipboard!');
    return response()->json(['status' => 'ok']);
})->name('copy.success')->middleware('auth');