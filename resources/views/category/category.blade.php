@extends('layout.main')
@section('container')
    
<div class="card mt-3 shadow-sm p-3 mb-5 bg-body rounded">
    <div class="card-body">
        <a href="post-add" class="btn btn-md btn-success btn-rounded mb-3">Tambah Post</a>    
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Kategori</th>
                        <th scope="col">Judul Post</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($category as $cate)
                    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $cate->category_name }}</td>
        <td>
            @foreach($cate->posts as $post)
                {{ $post->title }}
            @endforeach
        </td>
        <td>
                <div class="d-flex flex-column">
                <a href="post-detail/{{ $cate->id }}" class="btn btn-md bg-primary text-light btn-rounded mb-2">
                    <i class="fa-solid fa-eye"></i>
                </a>
                <a href="post-edit/{{ $cate->id }}" class="btn btn-md bg-warning text-light btn-rounded mb-2">
                    <i class="fa-solid fa-pen"></i>
                </a>
                <form action="{{ route('post-del', $cate->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-md bg-danger text-light btn-rounded">
                        <i class="fa-solid fa-trash"></i>
                    </button>
                </form>
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
</div>
@endsection