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
    return view('welcome');
});

Auth::routes();
Route::get('logout', function ()
{
    auth()->logout();
    Session()->flush();

    return Redirect::to('/');
})->name('logout');

Route::get('/resident/{user}/edit', [App\Http\Controllers\ResidentsController::class, 'edit'])->name('resident.edit');
Route::get('/resident/{user}', [App\Http\Controllers\ResidentsController::class, 'index'])->name('resident.show');
Route::patch('/resident/{user}', [App\Http\Controllers\ResidentsController::class, 'update'])->name('resident.update');

Route::get('/card/create',[App\Http\Controllers\CardsController::class,'create']);
Route::post('/card',[App\Http\Controllers\CardsController::class,'store']);

Route::get('/visitor/create',[App\Http\Controllers\VisitorsController::class,'create']);
Route::get('/VisitorCreate',[App\Http\Controllers\VisitorsController::class,'VisitorCreate'])->name('visitor.VisitorCreate');;
Route::post('/visitor',[App\Http\Controllers\VisitorsController::class,'store']);

Route::get('/resident/card/{card}',[App\Http\Controllers\CardsController::class,'show']);
Route::get('/resident/visitor/{visitor}',[App\Http\Controllers\VisitorsController::class,'show']);
Route::get('/resident/record/{record}',[App\Http\Controllers\RecordController::class,'show']);
