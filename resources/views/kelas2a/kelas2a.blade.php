@extends('backend.home')
@section('judul','halaman kelas 2A')

@section('isi')
<h2>Kelas 2A</h2>

<a href="/tambah_kelas2a" class="btn btn-success my-2">Tambah Nama Siswa</a>

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
    @foreach ($kelas2a as $sa)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$sa->nama}}</td>
      <td>{{$sa->kelas}}</td>
      <td>{{$sa->msoffice}}</td>
      <td>{{$sa->photoshop}}</td>
      <td>{{$sa->laravel}}</td>
      <td>
      <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                <form class="" action="/kelas2a/{{ $sa->id }}" method="post">
                   @method('delete')
                   @csrf
                   <button type="submit" onclick="return confirm('Yakin Mau Menghapus Data?')" class="btn btn-danger">Hapus</button>
                   <a href="/edit_kelas2a/{{$sa->id}}" class="btn btn-warning">Edit</a>
                   <a href="/lihat_kelas2a/{{$sa->id}}" class="btn btn-success">Lihat</a>
                 </form>
      </div>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
{{$kelas2a->links()}}
  </div>
@endsection