@extends('layouts.main')

@section('content')
<h2>Detail</h2>


<h1>{{$destinasi->nama_destinasi}}</h1>
<p>Lokasi : {{$destinasi->lokasi}}</p>
<p>Deskripsi : {{$destinasi->deskripsi}}</p>
<p>Jumlah View : {{$destinasi->jml_view}}</p>
<p>Harga : {{$destinasi->estimasi_harga}}</p>

<button class="btn btn-primary" onclick="history.back()">Go Back</button>
<td><a type="button" class="btn btn-primary me-2" href="/tiket/create/{{$destinasi->id}}">Pesan Tiket</a>

    @endsection