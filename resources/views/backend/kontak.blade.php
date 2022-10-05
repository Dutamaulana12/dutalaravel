@extends('backend.home')
@section('judul','halaman utama')

@section('isi')
<link rel="stylesheet" href="{{asset('css4/style.css')}}">
<form>     
    <h2>Contact Me</h2>
  <input name="name" type="text" class="feedback-input" placeholder="Name" />   
  <input name="email" type="text" class="feedback-input" placeholder="Email" />
  <textarea name="text" class="feedback-input" placeholder="Comment"></textarea>
  <input type="submit" value="SUBMIT"/>
</form>
@endsection