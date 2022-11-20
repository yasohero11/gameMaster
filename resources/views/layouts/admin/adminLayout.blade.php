<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="{{asset('assets/css/model.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/adminGames.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/boxContiner.css')}}">
    @yield("links")
    <title>Document</title>
    

</head>
<body>
    
    @include("includes.admin._sidebarAdminNav")

    @yield("content")

    @include("includes.admin._alert")

</body>
<script
src="https://code.jquery.com/jquery-3.5.1.min.js"
integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
crossorigin="anonymous"></script>
<script src="{{asset('assets/js/popper.js')}}></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="{{asset('assets/js/dashboard.js')}}"></script>

    @yield("scripts")
</html>