<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Tournament;
use App\Models\Match;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public static function tournament($id)
    {
        session_start();

        $tournament = Tournament::where("id", $id)->first();
        if($tournament)
        {
            return view('tournament', ['tournament' => $tournament]);
        }
        else{
            return 'Error!';
        }
    }


    public static function tournaments(Request $request)
    {
        session_start();
        $tournaments = Tournament::all();

        if($tournaments)
        {
            return view('tournaments_container', ['tournaments' => $tournaments]);
        }
        else{
            return 'Error!';
        }
    }

    public static function index()
    {
        session_start();
        return view('index');
    }
}