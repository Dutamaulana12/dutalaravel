@extends('backend.home')
@section('judul','halaman kelas 1B')

@section('isi')
<h2>Kelas 1B</h2>

<a href="/tambah_kelas1b" class="btn btn-success my-2">Tambah Nama Siswa</a>

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
    @foreach ($kelas1b as $kb)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$kb->nama}}</td>
      <td>{{$kb->kelas}}</td>
      <td>{{$kb->msoffice}}</td>
      <td>{{$kb->photoshop}}</td>
      <td>{{$kb->laravel}}</td>
      <td>
      <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                <form class="" action="/kelas1b/{{ $kb->id }}" method="post">
                   @method('delete')
                   @csrf
                   <button type="submit" onclick="return confirm('Yakin Mau Menghapus Data?')" class="btn btn-danger">Hapus</button>
                   <a href="/edit_kelas1b/{{$kb->id}}" class="btn btn-warning">Edit</a>
                   <a href="/lihat_kelas1b/{{$kb->id}}" class="btn btn-success">Lihat</a>
                 </form>
      </div>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
{{$kelas1b->links()}}
  </div>
@endsection