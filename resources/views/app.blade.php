<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>my website</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="https://cdn.socket.io/socket.io-1.3.4.js"></script>
</head>
<body>

@yield('content')


@yield('script')
</body>
</html>