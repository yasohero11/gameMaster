<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
   
   
    
    <title>Home Page</title>
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/layoutStyle.css')}}" rel="stylesheet" type="text/css" />
    
    <script src="https://kit.fontawesome.com/1b6dbc5d1f.js"></script>
    
    @yield("links")
	

</head>

<body>

@include('includes._header')

@yield("content")


@include('includes._footer')
</body>
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
@yield('scripts')
</html>
    