<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class LeagueController extends Controller
{
    
    public function standings($id)
    {
    // $standings = Http::get('https://api-football-standings.azharimm.site/leagues/eng.1/standings');
    // $leagueInfo = Http::get('https://api-football-standings.azharimm.site/leagues/eng.1');
    $league = json_decode((Http::get('https://api-football-standings.azharimm.site/leagues/'.$id.'/standings'))->body(),true);   
    $info = json_decode((Http::get('https://api-football-standings.azharimm.site/leagues/'.$id))->body(),true);
    return view('leaguestandings', ['league' => $league, 'name'=> $info['data']['name'], 'logo' => $info['data']['logos']['dark'],'dump' =>$id]);
        
    }

    public function league(){
        $leagueinfo = json_decode((Http::get('https://api-football-standings.azharimm.site/leagues'))->body(),true);
        return view('league',$leagueinfo);
    }
}