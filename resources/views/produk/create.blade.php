@extends('app')

@section('content')
    <form id = "creationForm" class="form-horizontal" role="form" method="post">

        <div class="form-group">
            <label class="col-sm-2 control-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" name="nama" placeholder="Nama" class="form-control" value="{{$produk->nama}}">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Deskripsi</label>
            <div class="col-sm-10">
                <textarea name="deskripsi" id="" rows="3" placeholder="Deskripsi" class="form-control">{{$produk->deskripsi}}</textarea>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">Stok</label>
            <div class="col-sm-10">
                <textarea name="stok" id="" rows="1" placeholder="Stok" class="form-control">{{$produk->stok}}</textarea>
            </div>
        </div>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label class="col-sm-2 control-label">Harga</label>
            <div class="col-sm-10">
                <textarea name="harga" id="" rows="1" placeholder="Harga" class="form-control">{{$produk->harga}}</textarea>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">Gambar</label>
            <div class="col-sm-10">
                <textarea name="gambar" id="" rows="1" placeholder="Gambar" class="form-control">{{$produk->gambar}}</textarea>
            </div>
        </div>
        
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Submit</button>
            </div>
        </div>
    </form>
@endsection