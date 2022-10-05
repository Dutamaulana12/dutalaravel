@extends('backend.home')
@section('judul','halaman kelas 2B')

@section('isi')
<h2>Kelas 2B</h2>

<a href="/tambah_kelas2b" class="btn btn-success my-2">Tambah Nama Siswa</a>

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
    @foreach ($kelas2b as $sb)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$sb->nama}}</td>
      <td>{{$sb->kelas}}</td>
      <td>{{$sb->msoffice}}</td>
      <td>{{$sb->photoshop}}</td>
      <td>{{$sb->laravel}}</td>
      <td>
      <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                <form class="" action="/kelas2b/{{ $sb->id }}" method="post">
                   @method('delete')
                   @csrf
                   <button type="submit" onclick="return confirm('Yakin Mau Menghapus Data?')" class="btn btn-danger">Hapus</button>
                   <a href="/edit_kelas2b/{{$sb->id}}" class="btn btn-warning">Edit</a>
                   <a href="/lihat_kelas2b/{{$sb->id}}" class="btn btn-success">Lihat</a>
                 </form>
      </div>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
{{$kelas2b->links()}}
  </div>
@endsection