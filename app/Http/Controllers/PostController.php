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
        return view(view: 'posts.posts', data: compact('posts', 'title'), 
    );
    }

    public function create(): View {
        $title = "Yanuar Blog | Form Tambah Post";
        return view (view: 'posts.create', data: compact('title'));
    }

    public function store(Request $request){
        // $post = new PostModel;
        // $post->image = $request->gambar;
        // $post->title = $request->judul;
        // $post->content = $request->konten;
        // $post->save();
        // return redirect()->route('posts.index')->with(['succes' => 'Data Berhasil Disimpan!']);

        $posts = PostModel::create($request->all());
        return redirect('/posts')->with(['success' => 'Data Berhasil Disimpan!']);
    }
    
    public function edit(postModel $postEdit){
        $title = "Yanuar Blog | Edit Data";
        return view(view: 'posts.edit', data: compact('postEdit', 'title'));
        
    }
    
    public function update(Request $request, postModel $updatedPost){
        $updatedPost->update($request->all());
        return redirect('/posts')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function delete(postModel $deletedPost){
        $deletedPost->delete();
        return redirect('/posts')->with(['success' => 'Data Berhasil Dihapus!']);
    }

    public function show(postModel $showingPost){
        $title = "Yanuar Blog | Detail Post";
        return view(view: 'posts.detail', data: compact('showingPost', 'title'));
    }
}
