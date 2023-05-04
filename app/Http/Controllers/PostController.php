<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\PostModel;
use Illuminate\View\View;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use illuminate\Http\RedirectResponse;

class PostController extends Controller
{
    public function index(Request $request){
        $keyword = $request->keyword;
        // get posts
        $posts = PostModel::where('title', 'LIKE', '%'. $keyword . '%')->with('Category')->paginate(5);
        $routeCon = "/posts";
        $title = "Yanuar Blog | Dashboard";
        // render view with posts
        return view(view: 'posts.posts', data: compact('posts', 'title', 'routeCon')
    );
    }

    public function create(){
        $title = "Yanuar Blog | Form Tambah Post";
        $posts = PostModel::get();
        $categories = Category::select('id', 'category_name')->distinct()->get();
        return view (view: 'posts.create', data: compact('categories', 'title'));
    }

    public function store(Request $request){
        // $post = new PostModel;
        // $post->image = $request->gambar;
        // $post->title = $request->judul;
        // $post->content = $request->konten;
        // $post->save();
        // return redirect()->route('posts.index')->with(['succes' => 'Data Berhasil Disimpan!']);

        $image = $request->file('image');
        $image_extension = $image->extension();
        $image_name = date('ymdhis') .'.'. $image_extension;
        $image->move(public_path('image'), $image_name);

        $posts = PostModel::create([
            'image' => $image_name,
            'title' => $request->title,
            'content' => $request->content,
            'category_id' => $request->idCate
        ]);
        return redirect('posts')->with(['success' => 'Data Berhasil Disimpan!']);
    }
    
    public function edit(postModel $postEdit){
        $title = "Yanuar Blog | Edit Data";
        $categories = Category::select('id', 'category_name')->distinct()->get();
        return view(view: 'posts.edit', data: compact('postEdit', 'categories', 'title'));
        
    }
    
    public function update(Request $request, postModel $updatedPost){
        
        $image = $request->file('image');
        $image_extension = $image->extension();
        $image_name = date('ymdhis') .'.'. $image_extension;
        $image->move(public_path('image'), $image_name);
        
        File::delete(public_path('image'). '/' . $updatedPost->image);

        $updatedPost->update([
            'image' => $image_name,
            'title' => $request->title,
            'content' => $request->content
        ]);
        return redirect('/posts')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function delete(postModel $deletedPost){
        File::delete(public_path('image'). '/' . $deletedPost->image);
        $deletedPost->delete();
        return redirect('/posts')->with(['success' => 'Data Berhasil Dihapus!']);
    }

    public function show(postModel $showingPost){
        $title = "Yanuar Blog | Detail Post";
        return view(view: 'posts.detail', data: compact('showingPost', 'title'));
    }

    public function deletedPosts(){
        $title = "Yanuar Blog | Tempat Sampah";
        $deletedPost = PostModel::onlyTrashed()->get();
        return view(view: 'posts.post_deleted_list', data: compact('deletedPost', 'title'));
    }

    public function restore($postRestore){
        $deletedPost = PostModel::withTrashed()->where('id', $postRestore)->restore();
        return redirect('/posts')->with(['success' => 'Data Berhasil di Restore!']);
    }
}
