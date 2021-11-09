@extends('layouts.main')

@section('container')
<h1>Halaman About</h1>
<br>

<p> {{ $nama }}</p>
<p> {{ $alamat }}</p>
<img src="{{ $image }}" alt="{{ $nama }}" width = "200" >
    
@endsection
