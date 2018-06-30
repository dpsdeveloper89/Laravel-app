 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>First Laravel Project</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css"  href="/css/app.css">

</head>
<body>
    @include('inc.navbar')
<div class="container">
        @if(Request::is('/'))
        @include('inc.showcase')
        @endif
    <div clas="row">
        <div class="col-md-8 col-lg-8">
        @include('inc.messages')
         @yield('content')
        </div>
     <div class="col-md-4 col-lg-4">
         @include('inc.sidebar')
     </div>
</div>
    </div>


  
<footer id="footer" class="text-center">
<p>Copyright 2018 &copy; Dawood Ahmed Kehinde</p>
</footer>
</body>
</html>