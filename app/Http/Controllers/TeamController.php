<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\User;
use Auth;

class TeamController extends Controller
{
    public function getTeams()
    {
        $user = User::find(Auth::user()->id)->first();
        
        return view('my-teams', compact('user'));
    }

    public function getTeamDetail($id)
    {
        $team = Team::find($id);
       
        return view('team_detail', compact('team'));
    }
}
