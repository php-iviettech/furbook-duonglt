<html lang="en">
<head >
  <meta charset="utf-8"/>
    <title>Furbook</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div id="container" class="col-md-12">
    <div class ="page-header">
        @yield('header')
    </div>
        @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
            @endif
        @yield('content')

</div>
</body>
</html>