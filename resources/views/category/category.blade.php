@extends('layout.main')
@section('container')
@if (session('success'))
<div class="alert alert-success mt-3">
    {{ session('success') }}
</div>
@endif
<div class="card mt-3 shadow-sm p-3 mb-5 bg-body rounded">
    <div class="card-body">
        <div class="mb-3">
            <form action="" method="get">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search.." aria-describedby="button-addon2">
                    <button class="btn btn-outline-primary" type="button" id="button-addon2"><i class="fa-solid fa-magnifying-glass"></i></button>
                  </div>
            </form>
        </div>
        <div class="d-flex justify-content-between">
            <a href="category-add" class="btn btn-md btn-success btn-rounded mb-3">Tambah Post</a>
            <a href="cate-deleted" class="btn btn-md btn-info btn-rounded mb-3">Tempat Sampah</a>
        </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Kategori</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($category as $cate)
                    <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $cate->category_name }}</td>
                <td>
                <div class="d-flex flex-column">
                <div>
                    <a href="category-edit/{{ $cate->id }}" class="btn btn-md bg-warning text-light btn-rounded mb-2">
                        <i class="fa-solid fa-pen"></i>
                    </a>
                </div>
                <div>
                    <form action="{{ route('cate-del', $cate->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-md bg-danger text-light btn-rounded">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </form>
                </div>
            </div>
        </td>
    </tr>
    @empty
        <div class="alert alert-danger">
            Data post belum Tersedia.
        </div>

        @endforelse
    </tbody>
</table>
    </div>
    {{ $category->links() }}
</div>
@endsection