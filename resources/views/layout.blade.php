<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('mazer-assets/css/bootstrap.css') }}">

    <link rel="stylesheet" href="{{ asset('mazer-assets/vendors/iconly/bold.css') }}">

    <link rel="stylesheet" href="{{ asset('mazer-assets/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('mazer-assets/vendors/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('mazer-assets/css/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('mazer-assets/images/favicon-32x32.png') }}" type="image/x-icon">
    @yield('head')
</head>
<body>
    @yield('content')
</body>
</html>
