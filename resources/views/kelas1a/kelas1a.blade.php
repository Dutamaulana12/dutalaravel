@extends('backend.home')
@section('judul','halaman kelas 1A')

@section('isi')
<h2>Kelas 1A</h2>

<a href="/tambah_kelas1a" class="btn btn-success my-2">Tambah Nama Siswa</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Kelas</th>
      <th scope="col">Ms.office</th>
      <th scope="col">Photoshop</th>
      <th scope="col">Laravel</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($kelas1a as $ka)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$ka->nama}}</td>
      <td>{{$ka->kelas}}</td>
      <td>{{$ka->msoffice}}</td>
      <td>{{$ka->photoshop}}</td>
      <td>{{$ka->laravel}}</td>
      <td>
      <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                <form class="" action="/kelas1a/{{ $ka->id }}" method="post">
                   @method('delete')
                   @csrf
                   <button type="submit" onclick="return confirm('Yakin Mau Menghapus Data?')" class="btn btn-danger">Hapus</button>
                   <a href="/edit_kelas1a/{{$ka->id}}" class="btn btn-warning">Edit</a>
                   <a href="/lihat_kelas1a/{{$ka->id}}" class="btn btn-success">Lihat</a>
                 </form>
      </div>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<div style="">
  {{$kelas1a->links()}}
  </div>
@endsection