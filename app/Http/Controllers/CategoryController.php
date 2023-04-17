<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Yanuar Blog | Catgeory";
        $category = Category::with('posts')->paginate(2);
        return view(view: 'category.category', data: compact('category', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Yanuar Blog | Form Tambah Kategori";
        return view(view: 'category.create', data: compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $category = Category::create([
            'category_name' => $request->namaKategori
        ]);
        return redirect('category')->with(['success' => 'Data berhasil ditambahkan']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $cateEdit)
    {
        $title = 'Yanuar Blog | Form Edit Category';
        return view(view: 'category.edit', data: compact('cateEdit', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $updatedCate)
    {
        $updatedCate->update([
            'category_name' => $request->namaKategori
        ]);
        return redirect('category')->with(['success' => 'Data Berhasil diupdate!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Category $deletedCate)
    {
        $deletedCate->delete();
        return redirect('category')->with(['success' => 'Data Berhasil dihapus!']);
    }

    public function deletedCate(){
        $title = 'Yanuar Blog | Tempat Sampah';
        $category = Category::onlyTrashed()->get();
        return view(view: 'category.cate_deleted', data: compact('category', 'title'));
    }

    public function restore($cateRestore){
        $deletedCate = Category::withTrashed()->where('id', $cateRestore)->restore();
        return redirect('category')->with(['success' => 'Data Berhasil direstore!']);
    }
}
