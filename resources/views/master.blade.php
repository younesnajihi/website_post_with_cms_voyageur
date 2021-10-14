<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/'.setting('site.theme').'.min.css')}}">
    @yield('css')
    <title>Blog | laravel</title>
</head>

<body>
     
   
    @include('nav')
     <div class="container mt-4">
        
        @yield('content')

     </div>
   
    
<script src="{{asset('bootstrap.min.js')}}"></script>
<script src="{{asset('jquery.js')}}"></script>

@yield('js')
</body>
</html>