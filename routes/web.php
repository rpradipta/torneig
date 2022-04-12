<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeagueController;
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
    return view('landing');
});
Route::get('/league/{id}/{season}', [LeagueController::class, 'standings']);
Route::get('/league',[LeagueController::class, 'league']);

