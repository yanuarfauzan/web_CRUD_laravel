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
                <form action="{{ route('cate-do-edit', $cateEdit->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                      <div class="mb-3">
                        <label for="namaKategori" class="form-label">Nama Kategori</label>
                        <input type="text" class="form-control" id="namaKategori" name="namaKategori" value="{{ $cateEdit->category_name }}">
                      </div>
                      <button type="submit" class="btn btn-primary btn-rounded">Submit</button>
                      <a href="/category" class="btn btn-danger btn-rounded">Gajadi</a>
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