@extends('app')

@section('content')
    <div>
        @if(Auth::user()->isMarketing())
        <a href="{{url('pesanan/create')}}" class="btn btn-primary">Create</a> 
        @endif
		
		<ul class="nav navbar-right">
             <li>
                    <form action="{{url('search')}}" method="get">
                        <br>
                        <input type="text" name="keyword" placeholder = "search order">
                        <input type="submit" value="Search">
                    </form>
                </li>

    </ul>
		
    </div>
	
	
	

	
	
	
	
	
				

    <table class="table">
        <thead>
            <tr>
            	<td>Id</td>
                <td>Nama Marketing</td>
                <td>Nama</td>
                <td>Alamat</td>
                <td>Telepon</td>
                <td>Status</td>
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
                <td>{{$pesanan->delivered ? 'delivered' : 'pending'}}</td>
                <td>
                    <a href="{{url('pesanan/view/'.$pesanan->id)}}" class="btn btn-default">View</a>
                    @if (!$pesanan->delivered)
                    <a href="{{url('pesanan/update/'.$pesanan->id)}}" class="btn btn-default">Edit</a>
                    @endif
                </td>
            </tr>
        @endforeach   
        </tbody>
    
    </table>

@stop