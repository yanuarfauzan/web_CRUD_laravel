@extends("layout.main")
@section('container')
<div class="container">
    @if (session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
    @endif
    <div class="card mt-3">
    <div class="card-body">
        <a href="post-add" class="btn btn-md btn-success mb-3">TAMBAH POST</a>    <table class="table">
        <table class="table">
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

                    <a href="" class="badge bg-success">detail</a>
                    <a href="post-edit/{{ $post->id }}" class="badge bg-warning">edit</a>
                    <form action="{{ route('post-del', $post->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="badge bg-danger">hapus</button>
                    </form>
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