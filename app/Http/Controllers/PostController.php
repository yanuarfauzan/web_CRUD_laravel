<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Http\RedirectResponse;
use App\Models\PostModel;
use Illuminate\View\View;

class PostController extends Controller
{
    public function index(){
        // get posts
        $posts = PostModel::latest()->paginate(5);
        $title = "Yanuar Blog | Posts";
        // render view with posts
        return view(view: 'posts\posts', data: compact('posts', 'title'), 
    );
    }
    public function create(): View {
        return view ('posts.create');
    }

    public function store(Request $request): RedirectResponse{
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'title' => 'required|min:5',
            'content' => 'required|min:10'
        ]);
    }
    public function insert(){
        
    }
}
