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
    return view('testing');
});
// Route::get('/test', function () {
//     return view('testing');
// });
Route::get('/welcome', function () {
    $response = Http::get('https://api-football-standings.azharimm.site/leagues/eng.1');
    $league = json_decode($response->body());
    return view('profile')->with('league',$league);
});

