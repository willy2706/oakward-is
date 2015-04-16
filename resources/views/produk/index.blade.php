@extends('app')

@section('content')
    @if (Auth::user()->isOperational())
    <div>
        <a href="{{url('produk/create')}}" class="btn btn-primary">Create</a> 
    </div>
    @endif
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
                <td><img src="{{asset($produk->gambar)}}" alt=""></td>
                <td>
                    @if (!$produk->delivered && Auth::user()->isOperational())
                        <a href="{{url('produk/update/'.$produk->id)}}" class="btn btn-default">Edit</a>
                    @endif
                </td>
            </tr>
        @endforeach   
        </tbody>     
    
    </table>

@stop