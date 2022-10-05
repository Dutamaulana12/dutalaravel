@extends('backend.home')
@section('judul','halaman utama')

@section('isi')
<div class="container">
    <div class="row">
    <div class="col-6">
    <h1 class="mt-3">Halaman Detail Siswa</h1>

    <div class="card">
    <div class="card-body">
    <div class="" style="">
        <img src="/image/{{ $kelas1a->image}}" alt="" width="250" height="200">
    </div>
    <h5 class="card-title">Nama : {{ $kelas1a->nama }} </h5>
    <h6 class="card-subtitle mb-2 text-muted">Kelas : {{ $kelas1a->kelas }}</h6>
    <h6 class="card-subtitle mb-2 text-muted">Ms.office : {{ $kelas1a->msoffice }}</h6>
    <h6 class="card-subtitle mb-2 text-muted">Photoshop : {{ $kelas1a->photoshop }}</h6>
    <h6 class="card-subtitle mb-2 text-muted">Laravel : {{ $kelas1a->laravel }}</h6>

    <a href="/kelas1a" class="btn btn-warning">kembali</a>
  </div>
</div>

    </div>
    </div>
    </div>
@endsection