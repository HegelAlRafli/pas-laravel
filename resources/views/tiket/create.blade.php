@extends("layouts.main")

@section("content")


<div style="height: 80vh; width: 100vh; display: grid; align-items: center;" class="container">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <h3 align="center">Pesan Tiket</h3>
                    <h4 align="center"> {{$destinasis->nama_destinasi}}</h4>
                    <form action="/tiket/create" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="release">Date Release</label>
                            <input required type="date" class="form-control" id="release" placeholder="Masukkan Umur" name="release">
                        </div>
                        <div class="form-group mb-3">
                            <label for="jumlah_orang">Jumlah Orang</label>
                            <input required type="number" class="form-control" id="jumlah_orang" placeholder="Jumlah Orang" name="jumlah_orang">
                        </div>
                        <div class="form-group mb-3">
                            <label for="exampleInputName">Harga</label>
                            <input required type="name" value="{{$destinasis->estimasi_harga}}" class="form-control" id="exampleInputName" aria-describedby="emailHelp" placeholder="Rp. 900.000" readonly=name="nama">
                        </div>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Transfer</option>
                            <option value="1">Cash</option>
                        </select>

                        <button class="btn btn-primary" onclick="history.back()">Go Back</button>

                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection