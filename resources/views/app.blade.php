<!doctype html>
<head>
 <meta charset="UTF-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 <link href="{{ asset('css/app.css') }}" rel="stylesheet">
 <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
<body class="light">

    @yield('content')
    <script src="{{ asset("js/main.js") }}"></script>
</body>
