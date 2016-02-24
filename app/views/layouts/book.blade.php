<!doctype html>
<html>
<head>
    <title>Library Management System</title>
    <meta charset="utf-8">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
   <style>
        table form { margin-bottom: 0; }
        form ul { margin-left: 0; list-style: none; }
        .error { color: red; font-style: italic; }
        body { padding-top: 20px; }
    </style>
</head>
<body>
<div class="container">
    @if (Session::has('message'))
    <div class="flash alert">
        <p>{{ Session::get('message') }}</p>
    </div>
    @endif

    @yield('main')
</div>
</body>
</html>