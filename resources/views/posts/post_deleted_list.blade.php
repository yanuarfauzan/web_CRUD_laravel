@extends('layout.main')
@section('container')
<div class="card mt-3 shadow-sm p-3 mb-5 bg-body rounded">
    <div class="card-body">
            <a href="posts" class="btn btn-md btn-danger btn-rounded mb-3">Kembali</a>    
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Konten</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
    @forelse ($deletedPost as $post)
    <tr>
        <th>{{ $loop->iteration }}</th>
        <th>
            @if($post->image)
            <img src="{{ url('image'. '/' . $post->image) }}" alt="" class="img-thumbnail" style="width: 200">
            @endif

        </th>
        <td>{{ $post->title }}</td>
        <td>{{ $post->content }}</td>
        <td>{{ $post->Category['category_name'] }}</td>
        <td>
                <div class="d-flex flex-column">
                <a href="post-restore/{{ $post->id }}" class="btn btn-md bg-success text-light btn-rounded mb-2">
                    <i class="fa-solid fa-trash-can-arrow-up"></i>
                </a>
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