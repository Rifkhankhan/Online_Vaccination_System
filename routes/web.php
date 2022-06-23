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
});


Route::prefix('moh')->group(function(){
    Route::get('/',[MOHController::class,'home'])->name('moh.home');
    Route::get('/personHistory',[MOHController::class,'personHistory'])->name('moh.personHistory');
    Route::get('/announcement',[MOHController::class,'announcement'])->name('moh.announcement');
    Route::get('/reports',[MOHController::class,'reports'])->name('moh.reports');

});


Route::prefix('people')->group(function(){
    Route::get('/',[PeopleController::class,'home'])->name('people.home');
    Route::get('/smartvaccination',[PeopleController::class,'smartvaccination'])->name('people.smartvaccination');
    Route::get('/announcement',[PeopleController::class,'announcement'])->name('people.announcement');
});
