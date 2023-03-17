@extends("layout.main")
@section('container')
<div class="container">
    @if (session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
    @endif
    <div class="card">
    <div class="card-body">
        <a href="post-add" class="btn btn-md btn-success mb-3">TAMBAH POST</a>    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Gambar</th>
                <th scope="col">Judul</th>
                <th scope="col">Content</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
    <tbody>
        @php
            $no = 1;
        @endphp
        @forelse ($posts as $post)
        <tr>
            <th>{{ $no++ }}</th>
            <th>{{ $post->image }}</th>
            <td>{{ $post->title }}</td>
            <td>{{ $post->content }}</td>
            <td>
                {{-- <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('posts.destroy', $post->id) }}" method="POST">
                    <a href="{{ route('posts.show', $post->id) }}" class="btn btn-sm btn-dark">SHOW</a>
                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                </form> --}}
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
</div>
@endsection