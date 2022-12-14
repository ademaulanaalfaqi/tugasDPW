@extends('admin.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Alamat
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="control-label">Provinsi</label>
                               <select name="" class="form-control" style="color: black" onchange="gantiProvinsi(this.value)">
                                <option value="">Pilih Provinsi</option>
                                @foreach ($list_provinsi as $provinsi)
                                 <option value="{{$provinsi->id}}">{{$provinsi->nama}}</option>
                                @endforeach
                                </select> 
                            </div>
                            <div class="col-md-3">
                                <label for="" class="control-label">Kabupaten/Kota</label>
                               <select name="" class="form-control" id="kabupaten" style="color: black" onchange="gantiKabupaten(this.value)">
                               <option value=""> Pilih Provinsi Terlebih Dahulu</option>                                
                            </select> 
                            </div>
                            <div class="col-md-3">
                                <label for="" class="control-label">Kecamatan</label>
                               <select name="" class="form-control" id="kecamatan" style="color: black" onchange="gantiKecamatan(this.value)">
                                <option value=""> Pilih Kabupaten Terlebih Dahulu</option>
                                </select> 
                            </div>
                            <div class="col-md-3">
                                <label for="" class="control-label">Desa</label>
                               <select name="" class="form-control" id="desa" style="color: black">
                                <option value=""> Pilih Kecamatan Terlebih Dahulu</option>
                                </select> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('script')
    <script>
        function gantiProvinsi(id) {
            $.get("api/provinsi/" + id, function(result) {
                result = JSON.parse(result)
                option = ""
                for (item of result) {
                    option += `<option value="${item.id}">${item.nama}</option>`;
                }
                $("#kabupaten").html(option)
            });
        }
        function gantiKabupaten(id) {
            $.get("api/kabupaten/" + id, function(result) {
                result = JSON.parse(result)
                option = ""
                for (item of result) {
                    option += `<option value="${item.id}">${item.nama}</option>`;
                }
                $("#kecamatan").html(option)
            });
        }
        function gantiKecamatan(id) {
            $.get("api/kecamatan/" + id, function(result) {
                result = JSON.parse(result)
                option = ""
                for (item of result) {
                    option += `<option value="${item.id}">${item.nama}</option>`;
                }
                $("#desa").html(option)
            });
        }
    </script>
@endpush