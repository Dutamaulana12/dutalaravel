@extends('frontend.index')
@section('judul','halaman utama')

@section('isi')

<div class="min-h-screen bg-red-800 py-5">
<form class="" action="/carifkelas2a" method="GET" style="margin-right:190px ;">
                        <div class="input-group mb-3">
                          <div class="input-group-prepend col-10">
                            <button class="btn btn-primary" type="submit" style="float:right">Cari</button>
                          </div>
                          <input type="text" name="keyword" type="search" class="form-control  col-3" placeholder="Cari Nama Siswa"
                          aria-label="" aria-describedby="basic-addon1">
                        </div>
                      </form>
        <div class='overflow-x-auto w-full'>
            
            <table class='mx-auto max-w-4xl w-full whitespace-nowrap rounded-lg bg-white divide-y divide-gray-300 overflow-hidden'>
                <thead class="bg-gray-900">
                    <tr class="text-white text-left">
                        <th class="font-semibold text-sm uppercase px-6 py-4"> Nama </th>
                        <th class="font-semibold text-sm uppercase px-6 py-4">Kelas </th>
                        <th class="font-semibold text-sm uppercase px-6 py-4 text-center"> Ms.office </th>
                        <th class="font-semibold text-sm uppercase px-6 py-4 text-center"> Photoshop </th>
                        <th class="font-semibold text-sm uppercase px-6 py-4 text-center">Laravel</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                @foreach($fkelas2a as $fk)
                    <tr>
                        <td class="px-6 py-4">
                        
                            <div class="flex items-center space-x-3">
                                <div class="inline-flex w-10 h-10"> <img class='w-10 h-10 object-cover rounded-full' alt='User avatar' src='/image/{{$fk->image}}' /> </div>
                                <div>
                                    <p>{{$fk->nama}}</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <p class=""> {{$fk->kelas}} </p>
                        </td>
                        <td class="px-6 py-4 text-center">{{$fk->msoffice}}</td>
                        <td class="px-6 py-4 text-center">{{$fk->photoshop}}</td>
                        <td class="px-6 py-4 text-center">{{$fk->laravel}}</td>
                        @endforeach
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection