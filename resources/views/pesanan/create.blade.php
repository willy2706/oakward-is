@extends('app')

@section('content')
    <form id = "creationForm" class="form-horizontal" role="form" method="post">
        <div class="form-group">
            <label class="col-sm-2 control-label">Nama</label>
            <div class="col-sm-10">
                <textarea name="nama" id="" rows="1" placeholder="Nama" class="form-control">{{$pesanan->nama}}</textarea>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">Alamat</label>
            <div class="col-sm-10">
                <textarea name="alamat" id="" rows="1" placeholder="Alamat" class="form-control">{{$pesanan->alamat}}</textarea>
            </div>
        </div>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label class="col-sm-2 control-label">Telepon</label>
            <div class="col-sm-10">
                <textarea name="telepon" id="" rows="1" placeholder="Telepon" class="form-control">{{$pesanan->telepon}}</textarea>
            </div>
        </div>
        
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Submit</button>
            </div>
        </div>
    </form>
@endsection