<?php

namespace App\Http\Controllers;

use App\Models\Sport;
use Illuminate\Http\Request;

class SportsController extends Controller
{
    public function index (){
        $sports = Sport::all();
        return view('menu.schedule',['sports'=> $sports]);
    }
}
