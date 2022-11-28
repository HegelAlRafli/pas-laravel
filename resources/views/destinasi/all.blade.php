@extends('layouts.main')

@section('content')
<i class="fas fa-h1"></i>

<div class="container container-fluid">

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Destinasi</th>
                <th scope="col">Lokasi</th>
                <th scope="col">Jumlah View</th>
            </tr>
        </thead>
        <tbody>
            @foreach($destinasis as $destinasi)
            <tr>
                <th scope="row">{{ $destinasi['id'] }}</th>
                <td>{{ $destinasi->nama_destinasi }}</td>
                <td>{{ $destinasi->lokasi }}</td>
                <td>{{ $destinasi->jml_view }}</td>
                <td><a type="button" class="btn btn-primary me-2" href="/destinasi/detail/{{ $destinasi->nama_destinasi }}">Detail</a>

                </td>


            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection