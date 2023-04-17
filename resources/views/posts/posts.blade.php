@extends("layout.main")
@section('container')
<div class="container">
    @if (session('success'))
    <div class="alert alert-success mt-3">
        {{ session('success') }}
    </div>
    @endif
    <div class="card mt-3 shadow-sm p-3 mb-5 bg-body rounded">
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <a href="post-add" class="btn btn-md btn-success btn-rounded mb-3">Tambah Post</a>    
                <a href="post-deleted" class="btn btn-md btn-info btn-rounded mb-3">Tempat Sampah</a>
            </div>    
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
        @forelse ($posts as $post)
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
                    <a href="post-detail/{{ $post->id }}" class="btn btn-md bg-primary text-light btn-rounded mb-2">
                        <i class="fa-solid fa-eye"></i>
                    </a>
                    <a href="post-edit/{{ $post->id }}" class="btn btn-md bg-warning text-light btn-rounded mb-2">
                        <i class="fa-solid fa-pen"></i>
                    </a>
                    <form action="{{ route('post-del', $post->id) }}" method="POST">
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
    
</div>
@endsection