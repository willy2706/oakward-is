@extends('app')

@section('content')
<div class="form-group">
    <label class="col-sm-2 control-label">Nama Pemesan</label>
    {{$pesanan->nama}}
</div>
<div class="form-group">
    <label class="col-sm-2 control-label">Alamat Pemesan</label>
    {{$pesanan->alamat}}
</div>
<div class="form-group">
    <label class="col-sm-2 control-label">No Telepon Pemesan</label>
    {{$pesanan->telepon}}
</div>
<div class="form-group">
    <label class="col-sm-2 control-label">Barang Pesanan</label>
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
@stop