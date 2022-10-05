@extends('backend.home')
@section('judul','halaman utama')

@section('isi')
<h1 class="mt-3">Edit Nama Siswa</h1>

    <form method="post" action='/editkelas2b/{{$kelas2b->id}}' enctype="multipart/form-data">
        @method('patch')
            @csrf
          <div class="mb-1 col-5">
            <label for="nama" class="form-label">Nama</label>
            <input class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukan Nama Siswa" value="{{$kelas2b->nama}}" name="nama" require>
          </div>
          <div class="mb-3 col-5">
            <label for="npm" class="form-label">Kelas</label>
            <input class="form-control @error('npm') is-invalid @enderror" id="kelas" placeholder="Masukan Nama Kelas" value="{{$kelas2b->kelas}}" name="kelas">
          </div>
          <div class="mb-3 col-5">
            <label for="npm" class="form-label">Ms.office</label>
            <input class="form-control @error('npm') is-invalid @enderror" id="msoffice" placeholder="Masukan Nilai Ms.office" value="{{$kelas2b->msoffice}}" name="msoffice">
          </div>
          <div class="mb-3 col-5">
            <label for="npm" class="form-label">Photoshop</label>
            <input class="form-control @error('npm') is-invalid @enderror" id="photoshop" placeholder="Masukan Nilai Photoshop" value="{{$kelas2b->photoshop}}" name="photoshop">
          </div>
          <div class="mb-3 col-5">
            <label for="npm" class="form-label">Laravel</label>
            <input class="form-control @error('npm') is-invalid @enderror" id="laravel" placeholder="Masukan Nilai Laravel" value="{{$kelas2b->laravel}}" name="laravel">
          </div>
          <div class="form-group">
              <label for="image">Pilih Foto</label>
              <input type="file" class="form-control-file" id="image" name="image">
          </div>
          <div class="" style="margin-left:5px;">
          <img src="/image/{{ $kelas2b->image }}" alt=""  width="90" height="90">
          </div>
          <br>
          <button type="submit" class="btn btn-primary">Edit</button>
    </form>
@endsection