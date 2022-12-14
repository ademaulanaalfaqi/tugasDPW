@extends('admin.base')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-2">
            <div class="card">
                <div class="card-header">
                    Detail Data Produk
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="image" style="height: 500px;" >
                                        <img style="height: 100%;" src="{{url('public', $produk->foto)}}" alt="">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <h4>{{$produk->nama}}</h4>
                            <hr>
                            <p>
                                {{$produk->harga_string}} |
                                Stok : {{$produk->stok}} |
                                Berat : {{$produk->berat}} kg |
                                Seller : {{$produk->seller->nama}} |
                                Tanggal Produksi: {{$produk->created_at->format("d M Y")}}
                            </p>
                            <hr>
                            <p>
                                {!! nl2br($produk->deskripsi) !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection