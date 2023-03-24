@extends('layout.main')
@section('container')
<div class="container">
    <div class="row mt-3">
        <div class="col">
            <form action="{{ route('post-do-edit', $postEdit->id) }}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              @if($postEdit->image)
              <div class="mb-3">
                <img src="{{ url('image'). '/' . $postEdit->image }}" alt="" style="width: 100px;">
              </div>
              @endif
                <div class="mb-3">
                  <label for="gambar" class="form-label">Upload Foto</label>
                  <input type="file" class="form-control" id="gambar" name="image" value="{{ $postEdit->image }}">
                </div>
                <div class="mb-3">
                  <label for="judul" class="form-label">Judul Postingan</label>
                  <input type="text" class="form-control" id="judul" name="title" value="{{ $postEdit->title }}">
                </div>
                <div class="mb-3">
                  <label for="konten" class="form-label">Konten Postingan</label>
                  <textarea type="text" class="form-control" id="konten" name="content">
                    {{  $postEdit->content }}
                  </textarea>
                </div>
                <button type="submit" class="btn btn-primary">Ubah</button>
              </form>
        </div>
    </div>
</div>
@endsection
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.config.allowedContent = true;
            CKEDITOR.replace('konten');
    </script>