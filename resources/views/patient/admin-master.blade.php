<!DOCTYPE html>
<html lang="en">
<head>
    <title>PATIENT || Home PeopleCare PCVS Web</title>
    {{-- Form Only --}}
    <!--favicon-->
    <link rel="icon" href="{{asset('admin/assets/images/favicon.ico" type="image/x-icon')}}">
    <!-- simplebar CSS-->
    <link href="{{asset('admin/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet')}}"/>
    <!-- Bootstrap core CSS-->
    <link href="{{asset('admin/assets/css/bootstrap.min.css')}}" rel="stylesheet"/>
    <!-- animate CSS-->
    <link href="{{asset('admin/assets/css/animate.css')}}" rel="stylesheet" type="text/css"/>
    <!-- Icons CSS-->
    <link href="{{asset('admin/assets/css/icons.css')}}" rel="stylesheet" type="text/css"/>
    <!-- Sidebar CSS-->
    <link href="{{asset('admin/assets/css/sidebar-menu.css')}}" rel="stylesheet"/>
    <!-- Custom Style-->
    <link href="{{asset('admin/assets/css/app-style.css')}}" rel="stylesheet"/>

    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:700,600,400,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald:400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>

    <!-- CSS LIBRARY -->
    <link rel="stylesheet" type="text/css" href="{{asset('gofar/css/lib/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('gofar/css/lib/jquery-ui.css')}}">

    <!-- MAIN STYLE -->
    <link rel="stylesheet" type="text/css" href="{{asset('gofar/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('gofar/css/demo.css')}}">

    <!-- CSS COLOR -->
    <link id="colorreplace" rel="stylesheet" type="text/css" href="{{asset('gofar/css/colors/blue.css')}}">

        <script src="{{asset('/plugins/alerts-boxes/js/sweetalert.min.js')}}"></script>
        <script src="{{asset('/plugins/alerts-boxes/js/sweet-alert-script.js')}}"></script>
</head>
<body>

        @yield('content')
        @if ($errors->any())
        <script>let error = "";</script>
        @foreach ($errors->all() as $error)
            <script>error+={!!json_encode($error)!!}</script>
        @endforeach
        <script>swal("Failed",error)</script>
        @endif

        @include("components.footer-admin")
        @include('sweetalert::alert')
	
</body>
</html>
