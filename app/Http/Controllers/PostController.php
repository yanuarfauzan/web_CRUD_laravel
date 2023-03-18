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
    
    public function edit($id): View {
        $title = "Yanuar Blog | Edit Data";
        
        $postById = PostModel::findOrFail($id);
        return view(view: 'posts.edit', data: compact('id', 'title', 'postById'));
        
    }
    
    public function update(Request $request, $id){
        $post = postModel::findOrFail($id);
        
        $post->update($request->all());
        return redirect('/posts')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function delete($id){
        $deletedPost = postModel::findOrFail($id);
        $deletedPost->delete();
        return redirect('/posts')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
