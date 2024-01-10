<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class gamesController extends Controller
{
    public function gameall(){
        $filePath = storage_path('app/game5.json');
        $jsonContent = file_get_contents($filePath);
        $games = json_decode($jsonContent, true);
        return view ('games',compact('games'));
    }
}
