<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Blog extends Controller
{
    public function index(){
        return view('blog', [
            "title" => "Yanuar Blog | Blog"
        ]);
    }
}
