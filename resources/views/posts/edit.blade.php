@extends('layout.main')
@section('container')
<div class="container">
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
      <h3>Form Update Postingan</h3>
    </div>
    <div class="col-md-4"></div>
  </div>
</div>
<div class="container">
    <div class="row mt-3">
        <div class="col">
          <div class="card mt-3 shadow-sm p-3 mb-5 bg-body rounded">
            <div class="card-body">
            <form action="{{ route('post-do-edit', $postEdit->id) }}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              @if($postEdit->image)
              <div class="mb-3">
                <img src="{{ url('image'). '/' . $postEdit->image }}" alt="" width="200" id="output" class="img-thumbnail">
              </div>
              @endif
                <div class="mb-3">
                  <label for="gambar" class="form-label">Upload Foto</label>
                  <input type="file" class="form-control" id="gambar" name="image" onchange="previewImage()">
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
                <button type="submit" class="btn btn-primary btn-rounded">Ubah</button>
                <a href="/posts" class="btn btn-danger btn-rounded">Gajadi</a>
              </form>
            </div>
          </div>
        </div>
    </div>
</div>
@endsection
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.config.allowedContent = true;
            CKEDITOR.replace('konten');
    </script>
    <script>
       function previewImage() {
    const preview = document.getElementById('output');
    const fileInput = document.getElementById('gambar');
    const file = fileInput.files[0];
    if (file) {
      preview.src = URL.createObjectURL(file);
    } else {
      preview.src = '';
    }
  }
    </script>