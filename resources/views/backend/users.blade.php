@extends('backend.home')
@section('judul','halaman kelas 1A')

@section('isi')
<h2>Halaman Users</h2>


<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
      <th scope="col">Created at</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($users as $us)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$us->name}}</td>
      <td>{{$us->email}}</td>
      <td>{{$us->created_at}}</td>
      <td>
      <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                <form class="" action="/users/{{ $us->id }}" method="post">
                   @method('delete')
                   @csrf
                   <button type="submit" onclick="return confirm('Yakin Mau Menghapus Data?')" class="btn btn-danger">Hapus</button>
                   <a href="/edit_kelas1a/{{$us->id}}" class="btn btn-warning">Edit</a>
                   <a href="/lihat_kelas1a/{{$us->id}}" class="btn btn-success">Lihat</a>
                 </form>
      </div>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection