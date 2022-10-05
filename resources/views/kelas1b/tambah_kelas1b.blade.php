@extends('backend.home')
@section('judul','Tambah Nama Siswa')

@section('isi')
<h1 class="mt-3">Tambah Nama Siswa</h1>

    <form method="post" action='/prosestambahkelas1b' enctype="multipart/form-data">
            @csrf
          <div class="mb-1 col-5">
            <label for="nama" class="form-label">Nama</label>
            <input class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="masukan nama siswa" name="nama" require>
          </div>
          <div class="mb-3 col-5">
            <label for="npm" class="form-label">Kelas</label>
            <input class="form-control @error('npm') is-invalid @enderror" id="kelas" placeholder="Masukan nama kelas" name="kelas">
          </div>
          <div class="mb-3 col-5">
            <label for="npm" class="form-label">Ms.office</label>
            <input class="form-control @error('npm') is-invalid @enderror" id="msoffice" placeholder="Masukan nilai ms.office" name="msoffice">
          </div>
          <div class="mb-3 col-5">
            <label for="npm" class="form-label">Photoshop</label>
            <input class="form-control @error('npm') is-invalid @enderror" id="photoshop" placeholder="Masukan nilai photoshop" name="photoshop">
          </div>
          <div class="mb-3 col-5">
            <label for="npm" class="form-label">Laravel</label>
            <input class="form-control @error('npm') is-invalid @enderror" id="laravel" placeholder="Masukan nilai laravel" name="laravel">
          </div>
          <div class="form-group">
              <label for="image">Pilih Foto</label>
              <input type="file" class="form-control-file" id="image" name="image">
          </div>
          <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
@endsection