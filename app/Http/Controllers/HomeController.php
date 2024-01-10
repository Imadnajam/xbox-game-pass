<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Homepage(){

        $filePath = storage_path('app/game2.json');
        $jsonContent = file_get_contents($filePath);
        $games = json_decode($jsonContent, true);
        return view('home',['games'=>$games]);
    }
}
