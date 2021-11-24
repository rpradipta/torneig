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
    return view('home');
});

// Route::get('/eng1', function () {
//     // $standings = Http::get('https://api-football-standings.azharimm.site/leagues/eng.1/standings');
//     // $leagueInfo = Http::get('https://api-football-standings.azharimm.site/leagues/eng.1');
//     // $league = json_decode($standings->body(),true);   
//     // $info = json_decode($leagueInfo->body(),true);
//     // return view('leaguestandings', ['league' => $league, 'name'=> $info['data']['name'], 'logo' => $info['data']['logos']['dark']]);
// });

Route::get('/league/{id}', [LeagueController::class, 'standings']);

Route::get('/league',[LeagueController::class, 'league']);

