@extends('layout.main')
@section('container')
@if (session('success'))
<div class="alert alert-success mt-3">
    {{ session('success') }}
</div>
@endif
<div class="card mt-3 shadow-sm p-3 mb-5 bg-body rounded">
    <div class="card-body">
            <a href="category" class="btn btn-md btn-danger btn-rounded mb-3">Kembali</a>
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
                <a href="cate-restore/{{ $cate->id }}" class="btn btn-md bg-success text-light btn-rounded mb-2">
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