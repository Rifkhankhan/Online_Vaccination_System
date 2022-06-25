<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
// use app\Http\Controllers\UserController;
use App\Http\Controllers\MOHController;
use App\Http\Controllers\PeopleController;
// use App\Http\Controllers\VaccinationAnnouncement;
// use App\Http\Controllers\VaccinationHistory;
// use App\Http\Controllers\RequestForVaccinationCertificate;
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
    return view('welcome');
});




Route::prefix('admin')->group(function(){
    Route::get('/',[AdminController::class,'home'])->name('admin.home');
    Route::get('/createmoh',[AdminController::class,'createmoh'])->name('admin.createmoh');
    Route::post('/store',[AdminController::class,'store'])->name('moh.store');

});


Route::prefix('moh')->group(function(){
    Route::get('/',[MOHController::class,'home'])->name('moh.home');
    Route::get('/personHistory',[MOHController::class,'personHistory'])->name('moh.personHistory');
    Route::post('/storeHistory',[MOHController::class,'storeHistory'])->name('moh.storehistore');
    Route::get('/announcement',[MOHController::class,'announcement'])->name('moh.announcement');
    Route::post('/storeAnnouncement',[MOHController::class,'storeAnnouncement'])->name('moh.storeAnnouncement');
    Route::get('/reports',[MOHController::class,'reports'])->name('moh.reports');
    Route::get('/view/{id}',[MOHController::class,'view'])->name('moh.view');
    Route::get('/approve/{id}',[MOHController::class,'approve'])->name('moh.approve');
    Route::get('/reject/{id}',[MOHController::class,'reject'])->name('moh.reject');
    Route::get('/logout',[MOHController::class,'logout'])->name('moh.logout');

});


Route::prefix('people')->group(function(){
    Route::get('/',[PeopleController::class,'home'])->name('people.home');
    Route::get('/smartvaccination',[PeopleController::class,'smartvaccination'])->name('people.smartvaccination');
    Route::post('/store',[PeopleController::class,'store'])->name('people.store');
    Route::get('/announcement',[PeopleController::class,'announcement'])->name('people.announcement');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


