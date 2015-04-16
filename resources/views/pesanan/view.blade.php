@extends('app')

@section('content')
<div class="form-horizontal"> 
    <div class="form-group">
        <label class="col-sm-2">Nama Pemesan</label>
            <div class="col-sm-10">
                {{$pesanan->nama}}
            </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 ">Alamat Pemesan</label>
        <div class="col-sm-10">
            {{$pesanan->alamat}}
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2">No Telepon Pemesan</label>
        <div class="col-sm-10">
            {{$pesanan->telepon}}
        </div>
    </div>
    <div class="form-group">
    <label class="col-sm-2">Barang Pesanan</label>
    </div>
    <div class="form-group">
        <div>
             <table class="table">
                <thead>
                    <tr>
                        <td>Barang</td>
                        <td>Tanggal</td>
                        <td>Jumlah</td>
                    </tr>
                    @foreach ($memesans as $memesan)
                    <tr>
                        <td>{{$memesan->id_produk}}</td>
                        <td>{{$memesan->tanggal}}</td>
                        <td>{{$memesan->jumlah}}</td>
                    </tr>
                    @endforeach
                </thead>
            </table>
        </div>
    </div>
</div>

@stop