<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class About extends Controller
{
    public function index(){
        return view('about', [
            "title" => "Yanuar Blog | About"
        ]); 
    }
}
