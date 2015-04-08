@extends('app')

@section('content')
    <div>
        <a href="{{url('pesanan/create')}}" class="btn btn-primary">Create</a> 
    </div>
    <br>

    <table class="table">
        <thead>
            <tr>
            	<td>Id</td>
                <td>Nama Marketing</td>
                <td>Nama</td>
                <td>Alamat</td>
                <td>Telepon</td>
            </tr>
        </thead>
        <tbody>
        @foreach ($pesanans as $pesanan)
            <tr>
                <td>{{$pesanan->id}}</td>
                <td>{{$pesanan->user->nama}}</td>
                <td>{{$pesanan->nama}}</td>
                <td>{{$pesanan->alamat}}</td>
                <td>{{$pesanan->telepon}}</td>
                <td>
                    <a href="{{url('pesanan/update/'.$pesanan->id)}}" class="btn btn-default">Edit</a>
                </td>
            </tr>
        @endforeach   
        </tbody>     
    
    </table>

@stop