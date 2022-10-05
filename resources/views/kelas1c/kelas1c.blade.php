@extends('backend.home')
@section('judul','halaman kelas 1C')

@section('isi')
<h2>Kelas 1C</h2>

<a href="/tambah_kelas1c" class="btn btn-success my-2">Tambah Nama Siswa</a>

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
    @foreach ($kelas1c as $kc)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$kc->nama}}</td>
      <td>{{$kc->kelas}}</td>
      <td>{{$kc->msoffice}}</td>
      <td>{{$kc->photoshop}}</td>
      <td>{{$kc->laravel}}</td>
      <td>
      <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                <form class="" action="/kelas1c/{{ $kc->id }}" method="post">
                   @method('delete')
                   @csrf
                   <button type="submit" onclick="return confirm('Yakin Mau Menghapus Data?')" class="btn btn-danger">Hapus</button>
                   <a href="/edit_kelas1c/{{$kc->id}}" class="btn btn-warning">Edit</a>
                   <a href="/lihat_kelas1c/{{$kc->id}}" class="btn btn-success">Lihat</a>
                 </form>
      </div>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
{{$kelas1c->links()}}
  </div>
@endsection