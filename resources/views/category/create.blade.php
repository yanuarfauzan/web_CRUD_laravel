@extends('layout.main')
@section('container')
<div class="container">
    <div class="row">
      <div class="col-md-4">
        <h3>Form Tambah Postingan</h3>
      </div>
    </div>
  </div>
  <div class="container">
      <div class="row mt-3">
          <div class="col">
            <div class="card mt-3 shadow-sm p-3 mb-5 bg-body rounded">
              <div class="card-body">
              <form action="categories" method="POST">
                @csrf
                  <div class="mb-3">
                    <label for="namaKategori" class="form-label">Nama Kategori</label>
                    <input type="text" class="form-control" id="namaKategori" name="namaKategori">
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