<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel</title>

	<!-- <link href="{{ asset('/css/app.css') }}" rel="stylesheet"> -->
	<link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/morris.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/sb-admin.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/font-awesome-4.1.0/css/font-awesome.min.css') }}" rel="stylesheet">
	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Oakward</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
	                @if(Auth::check())
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{Auth::user()->nama}} <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{url('auth/logout')}}"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                    @endif
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="index.html">Produk</a>
                    </li>
                    <li>
                        <a href="charts.html">Pesanan</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
        <div id="page-wrapper">

            <!-- <div class="container-fluid"> -->

                <!-- Page Heading -->
                <div class="row">
                    <!-- <div class="col-lg-12"> -->
<!--                         <h1 class="page-header">
                            Dashboard <small>Statistics Overview</small>
                        </h1> -->
<!--                         <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol> -->
                    <!-- </div> -->
                </div>

                @yield('content')

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

	<!-- Scripts -->
	<!-- jQuery Version 1.11.0 -->
    <script src="{{ asset('/js/jquery-1.11.0.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/js/plugins/morris/raphael.min.js') }}"></script>
    <script src="{{ asset('/js/plugins/morris/morris.min.js') }}"></script>
    <script src="{{ asset('/js/plugins/morris/morris-data.min.js') }}"></script>
</body>
</html>
