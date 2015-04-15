@extends('app')
@section('content')
    <form id = "creationForm" class="form-horizontal" role="form" method="post">
        <div class="form-group">
            <label class="col-sm-2 control-label">Nama Pemesan</label>
            <div class="col-sm-10">
                <textarea name="nama" id="" rows="1" placeholder="Nama Pemesan" class="form-control">{{$pesanan->nama}}</textarea>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">Alamat Pemesan</label>
            <div class="col-sm-10">
                <textarea name="alamat" id="" rows="1" placeholder="Alamat Pemesan" class="form-control">{{$pesanan->alamat}}</textarea>
            </div>
        </div>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label class="col-sm-2 control-label">No Telepon Pemesan</label>
            <div class="col-sm-10">
                <textarea name="telepon" id="" rows="1" placeholder="No Telepon Pemesan" class="form-control">{{$pesanan->telepon}}</textarea>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Barang Pesanan</label>
            <div class="col-sm-10">
                 <table class="table">
                    <thead id="pesanan">
                        <tr>
                            <td class="col-sm-8">Barang</td>
                            <td>Jumlah</td>
                        </tr>
                        <tr class = "hidden">
                            <td class="col-sm-8" id="isiproduk">
                                {!!Form::select('id_produk[]',App\Produk::lists('nama', 'id'))!!}
                            </td>
                            <td>
                                <textarea name="jumlah" rows="1" placeholder="" class="form-control"></textarea>
                            </td>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
        
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Submit</button>
                <button type="button" class="btn btn-primary" onclick="addPesanan()">Tambah Pesanan</button>
            </div>

        </div>
    </form>
@endsection

@section('script')
<script type="text/javascript">
    var i = 1;
    addPesanan();

    function addPesanan() {
        var table = document.getElementById('pesanan');
        var tr = document.createElement('tr');
        var td1 = document.createElement('td');
        td1.setAttribute('class', 'col-sm-8');
        td1.innerHTML = document.getElementById('isiproduk').innerHTML;

        var td2 = document.createElement('td');
        td2.setAttribute('class', 'col-sm-8');
        td2.innerHTML = '<textarea name="jumlah_' + i + '" rows="1" placeholder="" class="form-control"></textarea>';
        tr.appendChild(td1);
        tr.appendChild(td2);
        table.appendChild(tr);
        i++;
    }
</script>
@endsection
