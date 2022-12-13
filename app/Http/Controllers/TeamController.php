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
        $user = User::find(Auth::user()->id);
        $teams = $user->teams()->get();
        
        return view('my-teams', compact('user', 'teams'));
    }

    public function getTeamDetail($id)
    {
        $team = Team::find($id);
        $team_members = $team->users()->get();

        return view('team_detail', compact('team', 'team_members'));
    }
}
