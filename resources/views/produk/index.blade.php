@extends('app')

@section('content')
    <div>
        <a href="{{url('produk/create')}}" class="btn btn-primary">Create</a> 
    </div>
    <br>

    <table class="table">
        <thead>
            <tr>
            	<td>Id</td>
                <td>Nama</td>
                <td>Deskripsi</td>
                <td>Stok</td>
                <td>Harga</td>
                <td>Gambar</td>
            </tr>
        </thead>
        <tbody>
        @foreach ($produks as $produk)
            <tr>
                <td>{{$produk->id}}</td>
                <td>{{$produk->nama}}</td>
                <td>{{$produk->deskripsi}}</td>
                <td>{{$produk->stok}}</td>
                <td>{{$produk->harga}}</td>
                <td>{{$produk->gambar}}</td>
                <td>
                    <a href="{{url('produk/update/'.$produk->id)}}" class="btn btn-default">Edit</a>
					<!-- <a href="{{url('produk/delete/'.$produk->id)}}" class="btn btn-default">Delete</a> -->
                </td>
            </tr>
        @endforeach   
        </tbody>     
    
    </table>

@stop